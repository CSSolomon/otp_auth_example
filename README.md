### Explanation
VERY simple code showing how to use an otp auth credential (google authenticator 
compatible) from the CLI
In order to use this:

#### Prerequisites
 - Python virtualevn installed
 - Python pip installed

#### Usage
```sh
virtualevn otpauth
cd otpauth
. bin/activate
```

1st time only:
```sh
pip install -r resources.txt
```

Then store the credential in the secret variable and use


#### Files:
 - resources.txt    : The resource file used for the installation of requirements
 - sample_page.php  : A sample php page so you can get the credential from your web server. 
 - use_otpauth.py   : The file containing the code to generate the credential

#### NOTE
There is no encryption of the credential in this example and no intelligence in handling
thereof. This is merely sample code to use from your PC
