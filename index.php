<!DOCTYPE html>
<html lang="en">
<head runat="server">
    <meta charset="utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
   
    <meta property="og:type" content="website" />
   
    <meta name="google-site-verification" content="YGNvmOWfCRVE-XihCmI-TichQdLuA5EBsqGgG-POLRM" />
    <meta name="msvalidate.01" content="7AD63F2AAB111621CD0EC3C49B779DD4" />
   
    <!-- Recent Dev -->
    <meta http-equiv="Cache-control" content="public">
    
    <link rel="apple-touch-icon" href="~/Content/images/FastPasswordGenerator.webp"/>
    <meta name="theme-color" content="#0385b7" />   
 
    <link href="Content/images/FastPasswordGenerator.ico" rel="shortcut icon" type="image/x-icon" />
   
    <link href="Content/css/Site.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>



</head>
<body>
    <form runat="server">        

        <div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #0385b7">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" runat="server" href="" style="color: white; font-size: x-large">Fast Password Generator</a>
                </div>
               <div class="navbar-collapse collapse pull-right">
                    <ul class="nav navbar-nav">
                        <li><a runat="server" style="color: white; font-size: large;text-align:right" href="" rel="noopener noreferrer">Password Generator</a></li>
                        <li><a runat="server" style="color: white; font-size: large" href="md5-hash-generator.php" rel="noopener noreferrer">MD5 Generator</a></li>
                        <li><a runat="server" style="color: white; font-size: large" href="" rel="noopener noreferrer">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container body-content">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-lg-1">
                        <img id="FPG" src="Content/images/FastPasswordGenerator.webp" width="64" height="64" alt="Fast Passwords Generator" />
                    </div>
                    <div class="col-lg-11">
                        <label class="fontsize" for="FPG">Fast Passwords Generator</label>
                    </div>
                    <br />
                </div>
                <br />
                <div class="row toppadding">
                    <div class="col-lg-3">
                        <label for="PasswordTypeDropDown" id="lbl_PasswordType">Password Type:</label>
                          
                    </div>
                    <div class="col-lg-9">
                        <select name="PasswordType" id="PasswordTypeDropDown" class="widthsize">
                            <option value="Weak">Weak</option>
                            <option value="Strong">Strong</option>
                            <option value="Extreme Strong">Extreme Strong</option>
                        </select>
                    </div>
                </div>

                <div class="row toppadding">
                    <div class="col-lg-3">
                        <label for="PasswordLengthDropDown" id="lbl_PasswordLength">Password Length:</label>
                    </div>
                    <div class="col-lg-9">
                        <select name="PasswordLenght" id="PasswordLengthDropDown" class="widthsize">
                        </select>
                    </div>
                </div>

                <div class="row toppadding">
                    <div class="col-lg-3">
                        <label for="IncludeSymbolsCB" id="lbl_IncludeSymbols">Include Symbols:</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="checkbox" id="IncludeSymbolsCB" name="IncludeSymbolsCB" value="IncludeSymbolsCB" checked>
                        <label for="IncludeSymbolsCB">( e.g. @#$% )</label>                                             
                    </div>
                </div>
                
                <div class="row toppadding">
                    <div class="col-lg-3">
                        <label for="IncludeNumbersCB" id="lbl_IncludeNumbers">Include Numbers:</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="checkbox" id="IncludeNumbersCB" name="IncludeNumbersCB" value="IncludeNumbersCB" checked>
                        <label for="IncludeNumbersCB">( e.g. 123456 )</label>                                             
                    </div>
                </div>

                <div class="row toppadding">
                    <div class="col-lg-3">
                        <label for="ILCCB" id="lbl_ILCCB">Include Lowercase Characters:</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="checkbox" id="ILCCB" name="ILCCB" value="ILCCB" checked>
                        <label for="ILCCB">( e.g. abcdefgh )</label>                                            
                    </div>
                </div>

                <div class="row toppadding">
                    <div class="col-lg-3">
                        <label for="IUCCB" id="lbl_ILCCB">Include Uppercase Characters:</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="checkbox" id="IUCCB" name="IUCCB" value="IUCCB" checked>
                        <label for="IUCCB">( e.g. ABCDEFGH )</label>                                            
                    </div>
                </div>

                <div class="row toppadding">
                    <div class="col-lg-3">
                        <label for="ETSCB" id="lbl_ETS">Easy to say:</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="checkbox" id="ETSCB" name="ETSCB" value="ETSCB">
                        <label for="ETSCB">( e.g. Exclude numbers and symbols)</label>                                            
                    </div>
                </div>

                <div class="row toppadding">
                    <div class="col-lg-3">
                        <label for="ETRCB" id="lbl_ETR">Easy to read:</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="checkbox" id="ETRCB" name="ETRCB" value="ETRCB">
                        <label for="ETRCB">( e.g. Exclude ambiguous characters like l, 1, O, and 0 )</label>                                            
                    </div>
                </div>

                <div class="row toppadding">
                    <div class="col-lg-3">
                        <label for="PasswordQuantityDropDown" id="lbl_PasswordQuantity">Password Quantity:</label>
                          
                    </div>
                    <div class="col-lg-9">
                        <select name="PasswordQuantityDropDown" id="PasswordQuantityDropDown" class="widthsize">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>


                <div class="row buttonpadding">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-9">
                        <button type="button" id="GeneratePassword" class="button button5" >Generate Password</button>
                        <button type="button" id="Copy" class="button button5" onclick="CopyPassword()">Copy</button>
                    </div>
                </div>

                <div class="row toppadding">
                    <div class="col-lg-3">
                        <label for="" id="NewPassword">Your New Passwords:</label>
                        
                    </div>
                    <div class="col-lg-9">   
                        <textarea class="textpassword" id="NewPasswordTextArea" name="NewPasswordTextArea" style="width:315px; height:120px"></textarea>                 
                        
                    </div>
                </div>

                <div class="row toppadding">

                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <a href="" class="button3">Password Generator</a>
                        <a href="something" rel="noopener noreferrer" target="_blank" class="button3">Advanced Encryption Standard (AES)</a>
                        <a href="something" rel="noopener noreferrer" target="_blank" class="button3">Rivest-Shamir-Adleman (RSA)</a>
                        <a href="something" rel="noopener noreferrer" target="_blank" class="button3">Twofish</a>
                        <a href="something" rel="noopener noreferrer" target="_blank" class="button3">Blowfish</a>
                        <a href="something" rel="noopener noreferrer" target="_blank" class="button3">Data Encryption Standard (DES)</a>

                        
                        <a href="md5-hash-generator.aspx" class="button3">MD5</a>
                        <a href="sha1-generator.aspx" class="button3">SHA-1</a>
                        <a href="sha256-generator.aspx" class="button3">SHA-256</a>
                        <a href="sha512-generator.aspx" class="button3">SHA-512</a>
                    </div>
                    <div class="col-lg-1"></div>

                </div>
            </div>
            
            <div class="row toppadding">
                <p class="textalign"><b>To keep your online accounts safe and prevent your passwords from being compromised using malicious code, brute force, or dictionary attacks, you should be aware of the following:</b></p>
                <p class="textalign">
                    1. Never use the same password, security question, or answer for numerous essential accounts. 
                   
                    <br />
                    <br />
                    2. Create a password with at least 16 characters that includes a number, an uppercase letter, a lowercase letter, and a special symbol.
                   
                    <br />
                    <br />
                    3. Never use the names of your family, friends, or pets as passwords.
                   
                    <br />
                    <br />
                    4. Avoid using postcodes, house numbers, phone numbers, birthdates, ID card numbers, social security numbers, and other personal information in your passwords.
                   
                    <br />
                    <br />
                    5. Avoid using dictionary words in your passwords. 
                    <br />
                    &nbsp &nbsp Strong password examples include: <b>ePYHc~dS*)8$+V-' , qzRtC{6rXN3N\RgL , zbfUMZPE6`FC%)sZ. </b>
                    <br />
                    &nbsp &nbsp Weak passwords examples include: <b>qwert12345, Gbt3fC79ZmMEFUFJ, 1234567890, 987654321. </b>
                    <br />
                    <br />
                    6. Do not use two or more similar passwords with the majority of their characters the same, such as ilovefreshflowersMac and ilovefreshflowersDropBox, because if one of these passwords is stolen, all of these passwords are stolen. 
                    <br />
                    <br />
                    7. Do not use passwords that can be duplicated but cannot be changed, such as your fingerprints. 
                    <br />
                    <br />
                    8. Do not let your web browsers (FireFox, Chrome, Safari, Opera, Internet Explorer, and Microsoft Edge) to keep your passwords, as all passwords saved in web browsers can be easily disclosed. 
                    <br />
                    <br />
                    9. Do not log in to sensitive accounts on other people's computers or when using a public Wi-Fi hotspot, Tor, a free VPN, or a web proxy.
                    <br />
                    <br />
                    10. Do not transfer sensitive information online using unencrypted connections (e.g., HTTP or FTP), as communications in these connections can be sniffed with little effort. When possible, employ encrypted connections such as HTTPS, SFTP, FTPS, SMTPS, and IPSec.
                    <br />
                    <br />
                    11. When you're on the road, you can encrypt your Internet connections before they leave your laptop, tablet, phone, or router. For example, you can connect to a private VPN using protocols such as WireGuard (or IKEv2, OpenVPN, SSTP, or L2TP over IPSec) on your own server (home computer, dedicated server, or VPS). You can also create an encrypted SSH tunnel between your machine and your own server and configure Chrome or FireFox to use socks proxy. Even if someone uses a packet sniffer to collect your data as it is transported between your device (e.g., laptop, iPhone, iPad) and your server, they won't be able to steal your data or passwords from the encrypted streaming data.
                    <br />
                    <br />
                    12. Is my password secure? Perhaps you believe your passwords are extremely strong and tough to crack. However, if a hacker steals your username and the MD5 hash value of your password from a company's server and the hacker's rainbow table contains this MD5 hash, your password will be broken rapidly. 
                    <br />
                    <br />
                    &nbsp &nbsp To test the strength of your passwords and see if they are in the popular rainbow tables, use an <a href="md5-hash-generator.aspx" rel="noopener noreferrer" target="_blank">MD5 hash generator to generate MD5 hashes</a>, then decode your passwords by submitting these hashes to an online MD5 decryption service. 
                    <b>For example, if your password is "0123456789A," it may take a computer over a year to crack it using the brute-force method, but how long will it take to crack it if you decode it by submitting its MD5 hash (C8E7279CD035B23BB9C0F1F954DFF5B3) to an MD5 decryption website? You can run the test on your own.</b>
                    <br />
                    <br />
                    13. It is suggested that you update your passwords every 10 weeks. 
                    <br />
                    <br />
                    14. It is recommended that you remember a few master passwords, keep other passwords in a plain text file, and encrypt this file with 7-Zip, GPG, or disk encryption software like BitLocker, or manage your passwords with password management software.
                    <br />
                    <br />
                    15. Encrypt and backup your passwords in many locations so that if you lose access to your computer or account, you can quickly recover your passwords.
                    <br />
                    <br />
                    16. Whenever possible, enable two-factor authentication.
                    <br />
                    <br />
                    17. Do not keep important passwords on the cloud. 
                    <br />
                    <br />
                    18. Access key websites (e.g., Paypal) straight from bookmarks; otherwise, carefully examine its domain name; it's a good idea to check the popularity of a website with Alexa toolbar to confirm that it's not a phishing site before entering your password.
                    <br />
                    <br />
                    19. Use a firewall and antivirus software to protect your computer, and use the firewall to prevent all incoming and unwanted outgoing connections. Only download software from reliable sites, and whenever feasible, validate the <a href="md5-hash-generator.aspx" rel="noopener noreferrer" target="_blank">MD5</a> / SHA1 / SHA256 checksum or GPG signature of the installation package.
                    <br />
                    <br />
                    20. Keep your operating systems (e.g., Windows 7, Windows 10, Mac OS X, iOS, Linux) and Web browsers (e.g., FireFox, Chrome, IE, Microsoft Edge) and Web browsers (e.g., FireFox, Chrome, IE, Microsoft Edge) of your devices (e.g., Windows PC, Mac PC, iPhone, iPad, Android tablet) up to date by installing the latest security update.
                    <br />
                    <br />
                    21. If you have essential files on your computer that others can access, check for hardware keyloggers (e.g. wireless keyboard sniffer), software keyloggers, and hidden cameras as needed.
                    <br />
                    <br />
                    22. If you have WIFI routers in your home, it is feasible to learn the passwords you typed (at your neighbor's house) by detecting the gestures of your fingers and hands, because the WIFI signal they received changes when you move your fingers and hands. In such instances, you can type your passwords using an on-screen keyboard; however, it would be more safe if this virtual keyboard (or soft keyboard) changed layouts each time.
                    <br />
                    <br />
                    23. When you leave your computer or phone, lock it.
                    <br />
                    <br />
                    24. Encrypt the entire hard drive with VeraCrypt, FileVault, LUKS, or similar programs before storing essential files on it, and physically destroy the hard disk of your previous devices if required.
                    <br />
                    <br />
                    25. Use a secret or incognito mode to visit vital websites, or use one Web browser to view important websites and another to access other sites. Alternatively, you can view unimportant websites and install new software within a virtual computer established with VMware, VirtualBox, or Parallels.
                    <br />
                    <br />
                    26. Use at least three different email addresses: the first to receive emails from important sites and apps like Paypal and Amazon, the second to receive emails from unimportant sites and apps like Facebook, and the third (from a different email provider like Outlook or GMail) to receive your password-reset email if the first one (e.g. Yahoo Mail) is hacked.
                    <br />
                    <br />
                    27. Use at least two different phone numbers; DO NOT reveal the phone number you use to receive text messages with verification codes to anyone.
                    <br />
                    <br />
                    28. Do not click the link in an email or SMS message, and do not reset your passwords by clicking them, unless you are certain that the messages are genuine.
                    <br />
                    <br />
                    29. Do not reveal your passwords in the email to anyone.
                    <br />
                    <br />
                    30. It is conceivable that one of the software or Apps you downloaded or updated was modified by hackers; you can avoid this problem by not installing this software or App for the first time, unless it is published to remedy security flaws. Web-based programs, which are more secure and portable, can be used instead.
                    <br />
                    <br />
                    31. When utilizing online paste tools and screen capture applications, be cautious not to allow them to send your credentials to the cloud.
                    <br />
                    <br />
                    32. If you are a webmaster, instead of storing the users' passwords, security questions, and answers in plain text in the database, keep the salted (SHA1, SHA256, or SHA512)hash values of these strings. It is advised that each user generate a unique random salt string. Furthermore, it's a good idea to log the user's device information (e.g., OS version, screen resolution, etc.) and save the salted hash values of them, so that when he/she tries to login with the correct password but his/her device information DOESN'T match the previously saved one, this user can verify his/her identity by entering another verification code sent via SMS or email.
                    <br />
                    <br />
                    33. If you are a software developer, you should publish the update package signed with a private key using GnuPG and validate its signature with the previously published public key. 
                    <br />
                    <br />
                    34. To keep your online business safe, register your own domain name and set up an email account with this domain name; this way, you won't lose your email account and all of your contacts because you may host your mail server anywhere and your email account won't be disabled by the email provider. 
                    <br />
                    <br />
                    35. If an online purchasing site only accepts credit cards for payment, you should utilize a virtual credit card instead.
                    <br />
                    <br />
                    36. When you leave your computer, close your online browser; otherwise, cookies can be readily intercepted with a simple USB device, allowing you to avoid two-step verification and enter into your account with stolen cookies on other computers.
                    <br />
                    <br />
                    37. Distrust and remove faulty SSL certificates from your Web browser; otherwise, you will be unable to ensure the confidentiality and integrity of HTTPS connections using these certificates.
                    <br />
                    <br />
                    38. Encrypt the entire system partition; otherwise, deactivate the pagefile and hibernation features, as essential documents can be found in the pagefile.sys and hiberfil.sys files.
                    <br />
                    <br />
                    40. If possible, utilize cloud-based software rather than installing it on your local device, as there are an increasing number of supply-chain attacks that can install malicious applications or updates on your device in order to steal your credentials and obtain access to top secret data.
                    <br />
                    <br />
                    41. Every large corporation should create and use an intrusion detection system based on artificial intelligence ( including network behavior anomaly detection tools )
                    <br />
                    <br />
                    42. Only allow whitelisted IP addresses to connect to or log into critical servers and workstations.
                    <br />
                    <br />
        
                </p>
            </div>

            <hr class="hr">
            <footer class="footclass">
                <div class="row">
                    <div class="col-lg-12">
                        <p style="color: black; text-align: center; font-size: 15px">© Copyright <?php echo date("Y"); ?>  Fast Password Generator – All Right Reserved | Made with ❤️ in INDIA</p>
                    </div>
                </div>

                <div class="row"  style="text-align: center">
                    <div class="col-lg-12">
                       
                        <p>
                        <a href="" rel="noopener noreferrer" target="_blank">Passwords Generator</a>
                            &nbsp
                        <a href="md5-hash-generator.aspx" rel="noopener noreferrer" target="_blank">MD5 Hash Generator</a>
                            &nbsp
                        <a href="http://www.stopsweats.org" rel="noopener noreferrer" target="_blank">StopSweats</a>
                            &nbsp
                        <a href="http://www.stopsweats.org" rel="noopener noreferrer" target="_blank">StopSweats</a>
                            &nbsp
                        <a href="http://www.stopsweats.org" rel="noopener noreferrer" target="_blank">StopSweats</a>
                            &nbsp                            
                        <a href="http://www.stopsweats.org" rel="noopener noreferrer" target="_blank">StopSweats</a>
                        </p>
                    </div>
                </div>

                <div class="row" style="text-align: center">
                    <p style="color: black; text-align: center; font-size: 15px">Developed By: 
                        <a href="https://www.linkedin.com/in/thesanjayboga/" rel="noopener noreferrer" target="_blank">Sanjay Boga</a></p>
                </div>
            </footer>
        </div>
        


    </form>

    <!-- <script src="Content/scripts/JQuery.js"></script> -->
    <script src="Content/scripts/FPSScript.js"></script>
    
    <!-- <script src="Content/scripts/FunctionalLogic.php"></script> -->

    

</body>
</html>