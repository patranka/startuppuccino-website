package com.startuppuccino.accounts;

import java.security.Principal;
import java.util.Collections;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.authentication.UsernamePasswordAuthenticationToken;
import org.springframework.security.core.*;
import org.springframework.security.core.authority.SimpleGrantedAuthority;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.security.core.userdetails.*;
import org.springframework.security.crypto.password.PasswordEncoder;

import org.springframework.transaction.annotation.Transactional;
import org.springframework.stereotype.Service;
import org.springframework.context.annotation.Scope;
import org.springframework.context.annotation.ScopedProxyMode;



@Service
@Scope(proxyMode = ScopedProxyMode.TARGET_CLASS)
public class AccountService implements UserDetailsService
{

    @Autowired
    private AccountRepository accountRepository;

    @Autowired
    private PasswordEncoder passwordEncoder;




    @Transactional
    public Account save(Account account)
    {
        account.setPassword(passwordEncoder.encode(account.getPassword()));
        accountRepository.save(account);
        return account;
    }


    @Override
    public UserDetails loadUserByUsername(String username) throws UsernameNotFoundException
    {
        Account account = accountRepository.findOneByEmail(username);
        if (account == null)
        {
            throw new UsernameNotFoundException("user not found");
        }
        return createUser(account);
    }


    public void login(Account account)
    {
        SecurityContextHolder.getContext().setAuthentication(authenticate(account));
    }


    private Authentication authenticate(Account account)
    {
        return new UsernamePasswordAuthenticationToken(createUser(account), null, Collections.singleton
                (createAuthority(account)));
    }


    private User createUser(Account account)
    {
        return new User(account.getEmail(), account.getPassword(), Collections.singleton(createAuthority(account)));
    }


    private GrantedAuthority createAuthority(Account account)
    {
        return new SimpleGrantedAuthority(account.getRole().name());
    }


    public Account getCurrentAccount(Principal principal)
    {
        return accountRepository.findOneByEmail(principal.getName());
    }
}
