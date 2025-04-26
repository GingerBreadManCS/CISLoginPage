# CIS Group Project

# Vulnerable Login Page

This project is intentionally vulnerable for cybersecurity learning purposes.

## Vulnerabilities

1. **SQL Injection**: Inputs directly inserted into SQL in `login.php`.
2. **Cross-Site Scripting (XSS)**: Usernames echoed without escaping.
3. **CSRF**: No CSRF tokens for form submission.
4. **Insecure Password Storage**: Passwords stored in plain text.
5. **Weak Authentication**: No password complexity rules.
6. **Session Hijacking**: No proper session management.
7. **Open Redirect**: Redirect URL is user-controllable after login.

---
