<!DOCTYPE html>
<html>
<head>
	 <title>Join Now | Black ALT Dating</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="web/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="web/css/home-bg-slide.css">
	<link rel="stylesheet" type="text/css" href="web/css/style.css">
	<link rel="stylesheet" type="text/css" href="web/css/new-style.css">
	<link rel="stylesheet" type="text/css" href="web/css/sweetalert.css">
  <link rel="stylesheet" type="text/css"  href="web/css/swiper-bundle.min.css">
  <link rel="stylesheet" type="text/css"  href="web/css/glightbox.css">

	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair Display:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Font Awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!-- include header -->
@include('includes.header')
<!-- /include header -->

<style>
.text-red {
    color: red;
}
</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark header">
		<header class="container">
			<a class="logo" href="{{ route('landing_page') }}">
			   <img width="285"src="uploads/site/04c5f6350c450c41c57d2bf37f4e86d8.png">
			</a>
            <div class="pull-right header-login">
                @if (Auth::check())
                <a class="btn btn-outline-primary"  href="{{ route('user.profile_view',['username'=>'username']) }}">Profile</a>
                @else
                <a class="btn btn-outline-primary"  href="{{ route('landing_page') }}">Login</a>
                @endif
				
			</div>
		</header>
	</nav>

	<section class="container">
        <div class="col-md-12 content-area">
            <h3 class="mb-3">Terms and Conditions</h3>
            <h3 class="mb-3">1. INTRODUCTION</h3>
            <p><i class="font-weight-bold">By accessing or using Black Alt Dating services, you agree to be bound by these terms, so it is important that you read this agreement carefully before you create an account. We may update the terms from time to time, so you should check this page regularly for updates.</i></p>
            <p>Welcome to Black Alt Dating, by accessing or using our Services on www.Blackaltdating.com (the “Website”), Blackaltdating mobile application (the “App”), or any other platforms or services we may offer (collectively, the “Service” or our “Services”), you agree to, and are bound by, these Terms of Use (the “Terms” or “Agreement”). This Agreement applies to anyone who accesses or uses our Services, regardless of registration or subscription status</p>
            <p>Your use of our Services is also subject to the Privacy Policy, Cookie Policy, Community Guidelines, and any terms disclosed and agreed to by you when you purchase additional features, products, or services from Black Alt Dating (“Additional Terms Upon Purchase”), which are incorporated into this Agreement by reference. If you do not wish to be bound by this Agreement, do not use our Services.</p>
            <p>We reserve the right to modify, amend, or change the Terms at any time. Notice of any material change will be posted on this page with an updated effective date. In certain circumstances, we may notify you of a change to the Terms via email or other means, as appropriate under the circumstances; however, you are responsible for regularly checking this page for notice of any changes. We agree that future changes will not be retroactive without your consent. Your continued use of our Services constitutes your acceptance of any change, and you will be legally bound by the updated Terms. If you do not accept a change to the terms, you should stop using our Services immediately.</p>
            <h3 class="mb-3">2. ACCOUNT ELIGIBILITY YOUR RESPONSIBILITIES</h3>
            <p><i class="font-weight-bold">Before you create an account on Black Alt Dating, make sure you are eligible to use our Services. This Section also details what you can and can’t do when using the Services, as well as the rights you grant to Black Alt Dating</i></p>
            <h4 class="mb-3">By using our Services, you represent and warrant that:</h4>
            <ol style="color: black">
                <li>You are at least 18 years old;</li>
                <li>You are legally qualified to enter a binding contract with Black Alt Dating;</li>
                <li>You are not located in a country that is subject to a U.S. Government embargo, or that has been designated by the U.S. Government as a “terrorist supporting” country;</li>
                <li>You are not on any list of individuals prohibited from conducting business with the United States;</li>
                <li>You are not prohibited by law from using our services;</li>
                <li>You have not have been convicted of or pled no contest to a felony or indictable offense (or crime of similar severity), a sex crime, or any crime involving violence;</li>
                <li>You are not required to register as a sex offender with any state, federal or local sex offender registry;</li>
                <li>You do not have more than one account on our Services;</li>
                <li>You have not previously been removed from our Services by us, unless you have our express written permission to create a new account.</li>
            </ol>
            <p>If at any time you cease to meet these requirements, you must immediately delete your account.</p>
            <h4 class="mb-3">You agree to:</h4>
            <ul style="color: black">
                <li>Comply with these Terms, and check this page from time to time to ensure you are aware of any change;</li>
                <li>Comply with all applicable laws, including without limitation, privacy laws, intellectual property laws, anti-spam laws, and regulatory requirements;</li>
                <li>Use the latest version of the Website and/or App;</li>
                <li>Treat other users in a courteous and respectful manner, both on and off our Services;</li>
                <li>Be respectful when communicating with any of our customer care representatives or other employees;</li>
                <li>Review and comply with our guidelines, as updated from time to time; and</li>
                <li>Maintain a strong password and take reasonable measures to protect the security of your login information.</li>
            </ul>
            <h4 class="mb-3">You agree that you will not:</h4>
            <ul style="color: black">
                <li>Misrepresent your identity, age, current or previous positions, qualifications, or affiliations with a person or entity;</li>
                <li>Use the Services in a way that damages the Services or prevents their use by other users;</li>
                <li>Use our Services in a way to interfere with, disrupt or negatively affect the platform, the servers, or our Services’ networks;</li>
                <li>Use our Services for any harmful, illegal, or nefarious purpose;</li>
                <li>Harass, bully, stalk, intimidate, assault, defame, harm or otherwise mistreat any person;</li>
                <li>Post or share Prohibited Content (see below);</li>
                <li>Solicit passwords for any purpose, or personal identifying information for commercial or unlawful purposes from other users or disseminate another person’s personal information without his or her permission;</li>
                <li>Solicit money or other items of value from another user, whether as a gift, loan, or form of compensation;</li>
                <li>Use another user’s account;</li>
                <li>Use our Services in relation to fraud, a pyramid scheme, or other similar practice; or</li>
                <li>Violate the terms of the license granted to you by us.</li>
                <li>Disclose private or proprietary information that you do not have the right to disclose;</li>
                <li>Copy, modify, transmit, distribute, or create any derivative works from, any Member Content or Our Content, or any copyrighted material, images, trademarks, trade names, service marks, or other intellectual property, content or proprietary information accessible through our Services without our prior written consent;</li>
                <li>Express or imply that any statements you make are endorsed by Black Alt Dating;</li>
                <li>Use any robot, crawler, site search/retrieval application, proxy or other manual or automatic device, method or process to access, retrieve, index, “data mine,” or in any way reproduce or circumvent the navigational structure or presentation of our Services or its contents;</li>
                <li>Upload viruses or other malicious code or otherwise compromise the security of our Services;</li>
                <li>Forge headers or otherwise manipulate identifiers to disguise the origin of any information transmitted to or through our Services;</li>
                <li>“Frame” or “mirror” any part of our Services without our prior written authorization;</li>
                <li>Use meta tags or code or other devices containing any reference to us or the platform (or any trademark, trade name, service mark, logo or slogan of Black Alt Dating) to direct any person to any other website for any purpose;</li>
                <li>Modify, adapt, sublicense, translate, sell, reverse engineer, decipher, decompile or otherwise disassemble any portion of our Services, or cause others to do so;</li>
                <li>Use or develop any third-party applications that interact with our Services or Member Content or information without our written consent;</li>
                <li>Use, access, or publish the Black Alt Dating application programming interface without our written consent;</li>
                <li>Probe, scan or test the vulnerability of our Services or any system or network; or</li>
                <li>Encourage, promote, or agree to engage in any activity that violates these Terms.</li>
            </ul>
            <h4 class="mb-3">Prohibited Content—Black Alt Dating prohibits uploading or sharing content that:</h4>
            <ul style="color: black">
                <li>Is likely to be deemed offensive or to harass, upset, embarrass, alarm or annoy any other person;</li>
                <li>Is obscene, pornographic, violent or otherwise may offend human dignity, or contains nudity;</li>
                <li>Is abusive, insulting or threatening, discriminatory or that promotes or encourages racism, sexism, hatred or bigotry;</li>
                <li>Encourages or facilitates any illegal activity including, without limitation, terrorism, inciting racial hatred or the submission of which in itself constitutes committing a criminal offense;</li>
                <li>Is defamatory, libelous, or untrue;</li>
                <li>Relates to commercial activities (including, without limitation, sales, competitions, promotions, and advertising, solicitation for services, “sugar daddy” or “sugar baby” relationships, links to other websites or premium line telephone numbers);</li>
                <li>Involves the transmission of “junk” mail or “spam”;</li>
                <li>Contains any spyware, adware, viruses, corrupt files, worm programs or other malicious code designed to interrupt, damage or limit the functionality of or disrupt any software, hardware, telecommunications, networks, servers or other equipment, Trojan horse or any other material designed to damage, interfere with, wrongly intercept or expropriate any data or personal information whether from us or otherwise;</li>
                <li>Infringes upon any third party’s rights (including, without limitation, intellectual property rights and privacy rights);</li>
                <li>Was not written by you or was automatically generated, unless expressly authorized by us;</li>
                <li>Includes the image or likeness of another person without that person’s consent (or in the case of a minor, the minor’s parent or guardian), or is an image or likeness or a minor unaccompanied by the minor’s parent or guardian;</li>
                <li>Is inconsistent with the intended use of the Services; or</li>
                <li>May harm the reputation of us or any affiliates.</li>
            </ul>
            <p>The uploading or sharing of content that violates these terms (“Prohibited Content”) may result in the immediate suspension or termination of your account.</p>
            <h3 class="mb-3">3. CONTENT</h3>
            <p><i class="font-weight-bold">It is important that you understand your rights and responsibilities with regard to the content on our Services, including any content you provide or post. You are expressly prohibited from posting inappropriate content.</i></p>
            <p>While using our Services, you will have access to content that you upload or provide while using our Services (“Your Content”);  content that other users upload or provide while using our Services (“Member Content”); and content that we provides on and through our Services (“Our Content”). In this agreement, “content” includes, without limitation, all text, images, video, audio, or other material on our Services, including information on users’ profiles and in direct messages between users.</p>
            <h4 class="mb-3">3a. YOUR CONTENT</h4>
            <p><i class="font-weight-bold">You are responsible for Your Content. Don’t share anything that you wouldn’t want others to see, that would violate this Agreement, or that may expose you or us to legal liability.</i></p>
            <p>You are solely responsible and liable for Your Content, and, therefore, you agree to indemnify, defend, release, and hold us harmless from any claims made in connection with Your Content.</p>
            <p>You represent and warrant to us that the information you provide to us or any other user is accurate, including any information submitted through Facebook or other third-party sources (if applicable), and that you will update your account information as necessary to ensure its accuracy.</p>
            <p>The content included on your individual profile should be relevant to the intended use of our Services. You may not display any personal contact or banking information, whether in relation to you or any other person (for example, names, home addresses or postcodes, telephone numbers, email addresses, URLs, credit/debit card or other banking details). If you choose to reveal any personal information about yourself to other users, you do so at your own risk. We encourage you to use caution in disclosing any personal information online.</p>
            <p>Your individual profile will be visible to other people around the world, so be sure that you are comfortable sharing Your Content before you post. You acknowledge and agree that Your Content may be viewed by other users, and, notwithstanding these Terms, other users may share Your Content with third parties. By uploading Your Content, you represent and warrant to us </p>
            <p>You understand and agree that we may monitor or review Your Content, and we have the right to remove, delete, edit, limit, or block or prevent access to any of Your Content at any time in our sole discretion. Furthermore, you understand agree that we have no obligation to display or review Your Content.</p>
            <h4 class="mb-3">3b. MEMBER CONTENT</h4>
            
            <p><i class="font-weight-bold">While you will have access to Member Content, it is not yours and you may not copy or use Member Content for any purpose except as contemplated by these Terms.</i></p>
            <p>Other users will also share content on our Services. Member Content belongs to the user who posted the content and is stored on our servers and displayed at the direction of that user.</p>
            <p>You do not have any rights in relation to Member Content, and you may only use Member Content to the extent that your use is consistent with our Services’ purpose of allowing use to communicate with and meet one another. You may not copy the Member Content or use Member Content for commercial purposes, to spam, to harass, or to make unlawful threats. We reserve the right to terminate your account if you misuse Member Content.</p>
            <h4 class="mb-3">3c. OUR CONTENT</h4>
            <p><i class="font-weight-bold">Black Alt Dating owns all other content on our Services.</i></p>
            <p>Any other text, content, graphics, user interfaces, trademarks, logos, sounds, artwork, images, and other intellectual property appearing on our Services is owned, controlled or licensed by us and protected by copyright, trademark and other intellectual property law rights. All rights, title, and interest in and to Our Content remains with us at all times.</p>
            <h3 class="mb-3">4. INAPPROPRIATE CONTENT AND MISCONDUCT; REPORTING</h3>
            <p><i class="font-weight-bold">Black Alt Dating does not tolerate inappropriate content or behavior on our Services.</i></p>
            <p>We are committed to maintaining a positive and respectful community, and we do not tolerate any inappropriate content or misconduct, whether on or off of the Services. We encourage you to report any inappropriate Member Content or misconduct by other users. You can report a user directly by contacting us </p>
            <h3 class="mb-3">5. RIGHTS YOU ARE GRANTED BY Black Alt Dating</h3>
            <p><i class="font-weight-bold">Black Alt Dating does not tolerate inappropriate content or behavior on our Services.</i></p>
            <p>For as long as you comply with these Terms, we grants you a personal, worldwide, royalty-free, non-assignable, non-exclusive, revocable, and non-sublicensable license to access and use our Services for purposes as intended by us and permitted by these Terms and applicable laws.</p>
            <h3 class="mb-3">6. RIGHTS YOU GRANT Black Alt Dating</h3>
            <p><i class="font-weight-bold">You own all of the content you provide to us, but you also grant us the right to use Your Content as provided in this Agreement.</i></p>
            <p>By creating an account, you grant to us a worldwide, perpetual, transferable, sub-licensable, royalty-free right and license to host, store, use, copy, display, reproduce, adapt, edit, publish, translate, modify, and distribute Your Content, including any information you authorize us to access from Facebook or other third-party source (if applicable), in whole or in part, and in any format or medium currently known or developed in the future. Our license to Your Content shall be non-exclusive, except that our license shall be exclusive with respect to derivative works created through use of our Services. For example, we would have an exclusive license to screenshots of our Services that include Your Content.</p>
            <p>In addition, so that we can prevent the use of Your Content outside of our Services, you authorize us to act on your behalf with respect to infringing uses of Your Content taken from our Services by other users or third parties. We are not obligated to take any action with regard to use of Your Content by other users or third parties. Our license to Your Content is subject to your rights under applicable law (for example, laws regarding personal data protection to the extent the content contains personal information as defined by those laws).</p>
            <p> You agree that we, our affiliates, and our third-party partners may place advertising on our Services. By submitting suggestions or feedback to us regarding our Services, you agree that we may use and share such feedback for any purpose without compensating you.</p>
            <p>You agree that we may access, preserve, and disclose your account information, including Your Content, if required to do so by law or upon a good faith belief that such access, preservation, or disclosure is reasonably necessary to: comply with legal process; enforce these Terms; respond to claims that any content violates the rights of third parties;  respond to your requests for customer service; or  protect the rights, property or personal safety of the Company or any other person.</p>
           
            <h3 class="mb-3"><span class="text-red">7. PURCHASES AND AUTOMATICALLY RENEWING SUBSCRIPTIONS</span></h3>
            <p><i class="font-weight-bold">You will have the opportunity to purchase products and services from Black Alt Dating. If you purchase a subscription, it will automatically renew—and you will be charged—until you cancel.</i></p>
            <p><span class="text-red">If you purchase a subscription, it will automatically renew until you cancel, in accordance with the terms disclosed to you at the time of purchase, as further described below.</span> If you cancel your subscription, you will continue to have access to your subscription benefits until the end of your subscription period, at which point it will expire.</p>
            <p>Because our Services may be utilized without a subscription, canceling your subscription does not remove your profile from our Services. If you wish to fully terminate your membership, you must contact us directly</p>
            
            <h3 class="mb-3 text-red"><span class="text-red">8. EXTERNAL SERVICE PURCHASES AND SUBSCRIPTIONS</span></h3>
            <p><i class="font-weight-bold">External Service Purchases, including subscriptions, may be processed through the External Service, in which case those purchases must be managed through your External Service Account. Subscriptions automatically renew until you cancel.</i></p>
            <p><span class="text-red">If your External Service Purchase includes an automatically renewing subscription, your External Service Account will continue to be periodically charged for the subscription until you cancel. After your initial subscription commitment period, and again after any subsequent subscription period, the subscription will automatically continue for the price and time period you agreed to when subscribing.</span></p>
            
            <h3 class="mb-3 red-heading">9. INTERNAL PURCHASES AND SUBSCRIPTIONS</h3>
            <p><i class="font-weight-bold">Internal Purchases, including subscriptions, are processed using the Payment Method  provide on the Website or App. Subscriptions automatically renew until you cancel.</i></p>
            <p>If you make an Internal Purchase, you agree to pay the prices displayed to you for the Services you’ve selected as well as any sales or similar taxes that may be imposed on your payments (and as may change from time to time), and you authorize us to charge the payment method you provide (your “Payment Method”). we may correct any billing errors or mistakes even if we have already requested or received payment. We may terminate your account immediately in its sole discretion, on the basis that you have determined that you do not want a subscription.</p>
            <p><span class="text-red">If your Internal Purchase includes an automatically renewing subscription, your Payment Method will continue to be periodically charged for the subscription until you cancel. After your initial subscription commitment period, and again after any subsequent subscription period, your subscription will automatically continue for the price and time period you agreed to when subscribing, until you cancel.</span></p>
            <p>You may edit your Payment Method information at any time. If a payment is not successfully processed, due to expiration, insufficient funds, or otherwise, you remain responsible for any uncollected amounts and authorize us to continue billing the Payment Method, as it may be updated. This may result in a change to your payment billing dates.</p>
            <p>In addition, you authorize us to obtain updated or replacement expiration dates and card numbers for your credit or debit card as provided by your credit or debit card issuer. The terms of your payment will be based on your Payment Method and may be determined by agreements between you and the financial institution, credit card issuer, or other provider of your chosen Payment Method. </p>
            
            <h3 class="mb-3 ">10. REFUNDS</h3>
            <p>Generally, all purchases are final and nonrefundable, and there are no refunds or credits for partially used periods, except if the laws applicable in your jurisdiction provide for refunds.</p>
            <p><span class="font-weight-bold">Your Right to Cancel—You may cancel your subscription, without penalty or obligation, at any time.</span> In the event that you die before the end of your subscription period, your estate shall be entitled to a refund of that portion of any payment you had made for your subscription which is allocable to the period after your death. In the event that you become disabled (such that you are unable to use our Services) before the end of your subscription period, you shall be entitled to a refund of that portion of any payment you had made for your subscription which is allocable to the period after your disability by providing the company notice in the same manner as you request a refund as described below.</p>
            
            <h3 class="mb-3 ">11. ACCOUNT TERMINATION</h3>
            <p><i class="font-weight-bold">If you no longer wish to use our Services, or if we terminate your account for any reason, here’s what you need to know.</i></p>
            <p>You can delete your account at any time by logging into the Website or App, going to “Settings”, and following the instructions to disable or delete your account. We reserves the right to investigate and, if appropriate, suspend or terminate your account without a refund if you have violated these Terms, misused our Services, or behaved in a way that we regards as inappropriate or unlawful, on or off our Services. We reserve the right to make use of any personal, technological, legal, or other means available to enforce the Terms, at any time without liability and without the obligation to give you prior notice, including, but not limited to, preventing you from accessing the Services.</p>
            <p>If your account is terminated by you or by us for any reason, these Terms continue and remain enforceable between you and us, and you will not be entitled to any refund for purchases made. Your information will be maintained and deleted.</p>
            
            <h3 class="mb-3">12. NO CRIMINAL BACKGROUND OR IDENTITY VERIFICATION CHECKS</h3>
            <p><i class="font-weight-bold">Black Alt Dating does not conduct criminal background or identity verification checks on its users. Use your best judgment when interacting with others</i></p>
            <p>YOU UNDERSTAND THAT Black Alt Dating DOES NOT CONDUCT CRIMINAL BACKGROUND OR IDENTITY VERIFICATION CHECKS ON ITS USERS OR OTHERWISE INQUIRE INTO THE BACKGROUND OF ITS USERS. WE MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE CONDUCT, IDENTITY, INTENTIONS, LEGITIMACY, OR VERACITY OF USERS. </p>
            <p>YOU ARE SOLELY RESPONSIBLE FOR YOUR INTERACTIONS WITH OTHER USERS. SEX OFFENDER SCREENINGS AND OTHER TOOLS DO NOT GUARANTEE YOUR SAFETY AND ARE NOT A SUBSTITUTE FOR FOLLOWING SAFETY TIPS AND OTHER SENSIBLE SAFETY PRECAUTIONS. ALWAYS USE YOUR BEST JUDGMENT AND TAKE APPROPRIATE SAFETY PRECAUTIONS WHEN COMMUNICATING WITH OR MEETING NEW PEOPLE. COMMUNICATIONS RECEIVED THROUGH THE SERVICE, INCLUDING AUTOMATIC NOTIFICATIONS SENT BY US, MAY RESULT FROM USERS ENGAGING WITH THE SERVICE FOR IMPROPER PURPOSES, INCLUDING FRAUD, ABUSE, HARASSMENT, OR OTHER SUCH IMPROPER BEHAVIOR</p>
            <p>Though we strives to encourage a respectful user experience, it is not responsible for the conduct of any user on or off the Service. You agree to use caution in all interactions with other users, particularly if you decide to communicate off the Service or meet in person.</p>
            
            <h3 class="mb-3 ">13. DIGITAL MILLENNIUM COPYRIGHT ACT</h3>
            <p><i class="font-weight-bold">We take copyright infringement very seriously. We ask you to help us to ensure we address it promptly and effectively.</i></p>
            <p>We has adopted the following policy towards copyright infringement in accordance with the Digital Millennium Copyright Act (the “DMCA”). If you believe any Member Content or Our Content infringes upon your intellectual property rights, please submit a notification alleging such infringement (“DMCA Takedown Notice”) including the following:</p>
            <ol style="color: black">
                <li>A physical or electronic signature of a person authorized to act on behalf of the owner of an exclusive right that is allegedly infringed;</li>
                <li>Identification of the copyrighted work claimed to have been infringed, or, if multiple copyrighted works at a single online site are covered by a single notification, a representative list of such works;</li>
                <li>Identification of the material claimed to be infringing or to be the subject of infringing activity and that is to be removed or access disabled and information reasonably sufficient to permit the service provider to locate the material;</li>
                <li>Information reasonably sufficient to permit the service provider to contact you, such as an address, telephone number, and, if available, an electronic mail;</li>
                <li>A statement that  you have a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or the law; and</li>
                <li>A statement that, under penalty of perjury, the information in the notification is accurate and you are authorized to act on behalf of the owner of the exclusive right that is allegedly infringed.</li>
            </ol>
            
            <h3 class="mb-3">14. ACCEPTANCE OF TERMS</h3>
            <p><i class="font-weight-bold">By using our Services, you accept the Terms of this Agreement.</i></p>
            <p>By using our Services, whether through a mobile device, mobile application, or computer, you agree to be bound by  these Terms, which we may amend from time to time. If you do not accept and agree to be bound by all of the terms of this Agreement, please do not use our Services.</p>
            <p>The section headings and summaries contained herein are inserted for convenience only and shall not be considered in interpreting any term or provision hereof. All pronouns and any variations thereof shall be deemed to refer to the masculine, feminine, neuter, singular or plural as the identity of the entities or persons referred to any require. Any word both capitalized and uncapitalized will be deemed to have the same meaning.</p>
            
            <h3 class="mb-3">15. ENTIRE AGREEMENT</h3>
            <p><i class="font-weight-bold">This Agreement supersedes any previous agreements or representations.</i></p>
            <p>These Terms and Community Guidelines, and any Additional Terms Upon Purchase, contain the entire agreement between you and us regarding the use of our Services. The Terms supersede all previous agreements, representations, and arrangements between us, written or oral. If any provision of these Terms is held invalid, illegal, or otherwise unenforceable, the remainder of the Terms shall continue in full force and effect. The failure of the Company to exercise or enforce any right or provision of these Terms shall not constitute a waiver of such right or provision. You agree that your account is non-transferable and all of your rights to your account and its content terminate upon your death, unless otherwise provided by law. Any rights and licenses granted hereunder, may not be transferred or assigned by you, but may be assigned by us without restriction. No agency, partnership, joint venture, fiduciary or other special relationship or employment is created as a result of these Terms, and you may not make any representations on behalf of or bind us in any manner.</p>
            
            
        </div>
	</section>
	


	<footer class="footer_footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6"> 
                    <img src="{{asset('uploads/site/04c5f6350c450c41c57d2bf37f4e86d8.png')}}" class="img-fluid footer-logo">
				</div>
	
				<div class="col-md-6">
					<ul class="footer-links">
						<li><a href=""><i class="fab fa-instagram"></i></a></li>
						<li><a href=""><i class="fab fa-facebook"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>
	
				<div class="col-12 text-center">
					<ul class="footerz-link">
                        <li><a href="{{route('about-us')}}">About Us</a></li>
						<li><a href="{{route('contact-us')}}">Contact Us</a></li>
						<li><a href="{{route('term-conditions')}}">Term & Conditions</a></li>
					</ul>
					<div class="credit">
						<p>Copyright 2022. All Rights Reserved | Customer Support: info@blackdating.com</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
<script type="text/javascript" src="web/js/jquery-2.0.3.js" ></script>
<script src="web/js/popper.js"></script>
<script type="text/javascript" src="web/js/bootstrap.min.js"></script>
<script type="text/javascript" src="web/js/sweetalert.js"></script>
<script type="text/javascript" src="web/js/select2.min.js"></script>
<script type="text/javascript" src="web/js/jquery.form.js"></script>
<script type="text/javascript" src="web/js/jquery.uploadfile.js"></script>
<script type="text/javascript" src="web/js/jquery.blockUI.js"></script>


<script type="text/javascript" src="web/js/jquery.fancybox.js"></script>
<!-- Dynamic JS Files -->


 <script type="text/javascript" src="web/js/register.js"></script>
 <script type="text/javascript" src="web/js/swiper-bundle.min.js"></script>
 <script type="text/javascript" src="web/js/glightbox.js"></script>
 <script type="text/javascript" src="web/js/all.js"></script>

</body>
<!-- include footer -->
@include('includes.footer')
<!-- /include footer -->

</html> 
