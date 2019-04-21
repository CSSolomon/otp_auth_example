#!/usr/bin/env python
import oath
secret = "NFZXI2DJON2GQZLSMVQWY3DJMZSQU==="
a = oath._utils.tohex( oath.google_authenticator.lenient_b32decode(secret))
print oath.totp(a)
