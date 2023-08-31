@extends("inner-page-master")
@section('page-title', __tr('Faqs'))
@section('head-title', __tr('Faqs'))
@section('keywordName', __tr('Faqs'))
@section('keyword', __tr('Faqs'))
@section('description', __tr('Faqs'))
@section('keywordDescription', __tr('Faqs'))
@section('page-image', getStoreSettings('logo_image_url'))
@section('twitter-card-image', getStoreSettings('logo_image_url'))
@section('page-url', url()->current())

<!-- Page Heading -->
@section('content')

<div id="content" class="inner-pages-main">

	<div class="public-page help-page" itemscope="" itemtype="https://schema.org/FAQPage">
		<div class="public-title">
			<div class="container">
				<h1>Help and Frequently Asked Questions</h1>
			</div>
		</div>
		<div class="public-content container pb-sm-5">
			<div class="card">
				<div class="card-body">

					<div class="row">
						<div class="col-md-6">

							<section class="my-3">
								<h4 class="text-theme">
									About your account
								</h4>

								<ul class="mb-0">
									<li><a href="#how-to-join">How can I join?</a></li>
									<li><a href="#confirmation-message">I didn’t receive the confirmation message.</a></li>
									<li><a href="#how-much">How much does it cost?</a></li>
									<li><a href="#auto-renew">Will my Premium membership be automatically renewed?</a></li>
									<li><a href="#refund">How do I ask for a refund?</a></li>
									<li><a href="#how-to-delete-account">How do I delete my account?</a></li>
									<li><a href="#how-to-disable-account">Can I temporarily deactivate my account?</a></li>
									<li><a href="#change-email">How do I change my email address?</a></li>
									<li><a href="#change-password">How do I change my password?</a></li>
									<li><a href="#cant-log-in">Why can’t I log into my account?</a></li>
									<li><a href="#frequency-emails">How can I change the frequency of emails sent from My Transgender Date?</a></li>
									<li><a href="#guidelines">What is not allowed on My Transgender Date?</a></li>
								</ul>
							</section>

						</div>
						<div class="col-md-6">

							<section class="my-3">
								<h4 class="text-theme">
									About your profile &amp; photos
								</h4>

								<ul class="mb-0">
									<li><a href="#issues-uploading-photos">I’m having issues uploading my photo, what should I do?</a></li>
									<li><a href="#how-long-moderation-photo">How long does it take for the moderation team to approve my photo?</a></li>
									<li><a href="#edit-profile">What happens if I edit my profile?</a></li>
									<li><a href="#photo-not-showing">Why is my photo not showing?</a></li>
									<li><a href="#photo-edited">Why is my photo resized or edited with black rectangles?</a></li>
									<li><a href="#delete-photos">How do I delete photos?</a></li>
									<li><a href="#primary-photo">How do I choose my primary photo?</a></li>
									<li><a href="#services-visible">On what services is my profile visible?</a></li>
								</ul>
							</section>

						</div>

						<div class="col-md-6">

							<section class="my-3">
								<h4 class="text-theme">
									About interaction with other members
								</h4>

								<ul class="mb-0">
									<li><a href="#membership">Why can’t I send messages?</a></li>
									<li><a href="#report">How do I report a member to the moderation team?</a></li>
									<li><a href="#block">How do I block someone from sending me messages?</a></li>
									<li><a href="#unblock">How do I unblock someone?</a></li>
									<li><a href="#profile-unavailable">What does it mean when a profile is “unavailable”?</a></li>
									<li><a href="#profile-hidden">How can I hide profiles that I’m not interested in?</a></li>
									<li><a href="#genuine">How do I know if a member is genuine?</a></li>
								</ul>
							</section>

						</div>
						<div class="col-md-6">

							<section class="my-3">
								<h4 class="text-theme">
									About browser support
								</h4>

								<ul class="mb-0">
									<li><a href="#browsers">What browsers does our site support?</a></li>
								</ul>
							</section>

						</div>
					</div>
				</div>
			</div>

			<h2>About your account</h2>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="how-to-join" class="h5 mb-0">How can I join?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>Joining My Transgender Date is easy. Complete the <a href="{{route('user.sign_up')}}">sign up form</a> and you will receive a confirmation email with a link to follow to complete your registration. This will help confirm that you gave a real email address and that you will be able to receive emails from us. Your account will be activated and ready to use after this process.</p>
						<p>If you think you didn’t receive our confirmation message, read below.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="confirmation-message" class="h5 mb-0">I didn’t receive the confirmation message.</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>If you don’t receive the confirmation message within minutes after you sign up, check your Spam Folder (or Junk Folder). The word “ladyboy” is often blacklisted, thus our emails go directly to spam. Check your folders and make sure to accept incoming emails from us so they can go into your inbox.</p>
						<p>What you need to do: go to your Spam Folder, look for an email from <strong>“My Transgender Date”</strong> with the subject <strong>“Activate your account”</strong>, then select it and mark it as “not spam”. To make sure you receive our emails in the future, you can also add hello@mytransgenderdate.com to your list of contacts.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="how-much" class="h5 mb-0">How much does it cost?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>On My Transgender Date, it’s free to create your profile, review your matches and browse all the other profiles and photos. Your profile will remain active as long as you wish, for free.</p>
						<p>Although women (i.e. trans women / ladyboys) can use the full site for free, men will need to upgrade to a Premium membership in order to access some of the features (such as the ability to send messages). The cost of Premium membership is $29.00 for one month, with advantageous discounts if you buy several months.</p>
						<p>Being a paid website allows us to control the quality of our members (we value quality over quantity) because, in addition to hiring moderators, it also naturally filters out the men who are not seriously seeking a relationship.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="auto-renew" class="h5 mb-0">Will my Premium membership be automatically renewed?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>Premium memberships are not automatically renewed. We do not store your card or payment details to make future payments on your behalf. All payments made on our site are one-time payments.</p>
						<p>As soon as your Premium membership expires, your account will revert back to a standard membership. We will notify you by email when your membership is due to expire as a reminder.</p>
						<p>If you wish to renew your membership you will have to upgrade again by selecting a price plan and making a new payment.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="refund" class="h5 mb-0">How do I ask for a refund?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>You can ask for a refund at any time by <a href="{{route('user.read.contact')}}">contacting our support</a>. We will cancel your Premium membership and offer a refund of the remaining days in excess of 10 days from the start date of the membership (for example, if you have 25 remaining days on a 30 days membership, the refund amount will correspond to 20 days, not 25).</p>
						<p>Refunds are usually processed within one working day.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="how-to-delete-account" class="h5 mb-0">How do I delete my account?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>We’re sorry to see you go, but if you want to delete your account, go to <strong>Account settings</strong>, then at the bottom of the page click on <strong>To deactivate and/or delete your account, click here</strong>. Then follow the instructions.</p>
						<p>Beware that if you delete your account, there will be no way for you to get it back, all info and photos will be permanently removed. If you want to disable your account temporarily instead, read below.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="how-to-disable-account" class="h5 mb-0">Can I temporarily deactivate my account?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>If you want to leave My Transgender Date but keep your profile and photos intact, you can temporarily deactivate your account. There is no difference between deleting or deactivating your account from the perspective of other members; the only difference is that you can recover your profile at any time when you come back. You just have to log in with your email address and password, and your account will be reactivated instantly.</p>
						<p>For deactivating your account, go to your <strong>Account settings</strong>, then at the bottom of the page, click on <strong>To deactivate and/or delete your account, click here</strong>. Then follow the instructions.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="change-email" class="h5 mb-0">How do I change my email address?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>In order to change your email address, you need to contact our support team by email through the <a href="{{route('user.read.contact')}}">contact form</a>.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="change-password" class="h5 mb-0">How do I change my password?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>To change your password, go to <strong>Account settings</strong>, then click on <strong>Change password</strong>.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="cant-log-in" class="h5 mb-0">Why can’t I log into my account?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>If you forgot your password, use <a href="{{route('user.forgot_password')}}">this page</a>. If you still cannot log in, it is likely that your account got closed by our moderators. We apply our policies rigorously regarding photos, profile information, fake profiles, scammers and financial exchanges. If you get banned from our server, you usually get a notification by email explaining the reason.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="frequency-emails" class="h5 mb-0">How can I change the frequency of emails sent from My Transgender Date?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>We send a variety of emails to our members. In addition to our newsletter, we can also send you notifications when a member sends you a new message and visits your profile. We also send daily or weekly summaries of your profile’s activity, as well as possible matches, new and featured profiles.</p>
						<p>For each of those options, you can choose which emails you wish to receive or not receive. Go to your <a href="{{route('user.read.setting','notification')}}">Email settings</a> and select which emails you want us to send you.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="guidelines" class="h5 mb-0">What is not allowed on My Transgender Date?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>We designed community guidelines to ensure every member can enjoy My Transgender Date safely and responsibly. We invite you to familiarize yourself with these guidelines to make sure you don’t breach them.</p>
					</div>
				</div>
			</section>

			<h2>About your profile &amp; photos</h2>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="issues-uploading-photos" class="h5 mb-0">I’m having issues uploading my photo, what should I do?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>If you are having trouble uploading photos (it can happen for some models of smartphones for example), send us your photos by email and we will upload them for you.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="how-long-moderation-photo" class="h5 mb-0">How long does it take for the moderation team to approve my photo?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>It usually takes less than an hour for our moderation team to review your photo. You will get an email when it’s done.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="edit-profile" class="h5 mb-0">What happens if I edit my profile?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>You can change anything on your profile at any time, but there are two things that need approval from our moderators: your headline and your description. There are strict rules to follow in order to have a valid headline and description. These are listed where you edit your profile.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="photo-not-showing" class="h5 mb-0">Why is my photo not showing?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>If more than 24 hours passed after you posted your photo but it’s still not showing, that means our moderation team refused it because it was not following our guidelines. When we approve or refuse a photo, an email is automatically sent to you with an explanation.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="photo-edited" class="h5 mb-0">Why is my photo resized or edited with black rectangles?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>Sometimes our moderation team will take the liberty of cropping, blurring or blocking parts of a photo to better represent you and / or protect the identities of other people in the photo.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="delete-photos" class="h5 mb-0">How do I delete photos?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>Go to this page <a @if(isset(auth()->user()->username)) href="{{route('user.photos_setting', ['username' => auth()->user()->username])}}" @endif >Manage photos</a>, click on the photo you wish to delete, then click the Delete button on the bottom left.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="primary-photo" class="h5 mb-0">How do I choose my primary photo?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>Your primary photo is the one that shows first on your profile, in search results and in the private chat. To choose your primary photo, go to this page <a @if(isset(auth()->user()->username)) href="{{route('user.photos_setting', ['username' => auth()->user()->username])}}" @endif >Manage photos</a>, click on the photo you wish, then click the “Make primary” button on the bottom left.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="services-visible" class="h5 mb-0">On what services is my profile visible?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>Your profile created on My Transgender Date is visible to users registered with My Transgender Date and its cultural variants operated under different brand names (<a href="{{url('home')}}">mytransgenderdate.com</a>). This enables a user from a given country / culture to meet up with users from another country / culture. These services are functionally identical and use the same centralized platform.</p>
					</div>
				</div>
			</section>

			<h2>About interaction with other members</h2>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="membership" class="h5 mb-0">Why can’t I send messages?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>If you’re a lady, you need to complete your profile before you’re allowed to send messages. Complete your profile with a description and at least one photo, then wait for our moderation team to approve it. Once your profile is complete and approved, you can send and receive messages without any limitation.</p>
						<p>If you’re a man, you need to upgrade to a Premium membership. Once Premium, you can send and receive messages, without any limitation.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="report" class="h5 mb-0">How do I report a member to the moderation team?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>In the event that a member is harassing you, spamming, asking for / offering money, or otherwise making My Transgender Date a bad place to be, there are “Report” buttons on every profile page and on every conversation page. Reporting is confidential and our moderation team will deal with this quickly.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="block" class="h5 mb-0">How do I block someone from sending me messages?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>You can block someone from sending you message and from viewing your profile. To do so, there are Block buttons on every profile page and on every conversation page.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="unblock" class="h5 mb-0">How do I unblock someone?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>If you want to unblock a member, go to your <strong>Account settings</strong>, then on <strong>Blocked profiles</strong>. From there you can unblock members one by one.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="profile-unavailable" class="h5 mb-0">What does it mean when a profile is “unavailable”?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>Profiles may be unavailable for one of the following reasons:</p>
						<ol>
							<li>the member has suspended his/her account</li>
							<li>the member has deleted his/her account</li>
							<li>the member blocked you</li>
							<li>you blocked the member</li>
						</ol>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="profile-hidden" class="h5 mb-0">How can I hide profiles that I’m not interested in?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>If there are profiles that you are not interested in and no longer want to see in your search results, you can hide them using the X button at the top right of each result. This will also remove them from your favorites list, but it will not explicitly block them. They will still be able to see your profile and message you.</p>
					</div>
				</div>
			</section>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="genuine" class="h5 mb-0">How do I know if a member is genuine?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>This is the million-dollar question. You cannot! But you can be wise and avoid newbie pitfalls. We have advanced technology to automatically spot scammers, fakers, duplicate accounts and so forth. Our moderation team works every day reviewing profiles, photos and making My Transgender Date the safest place possible for dating transgender women. But it cannot be perfect. Online dating is a wonderful way to find love, but it has risks. You must be aware of them and must be smart.</p>
						<p>As a rule of thumb: NEVER send money to somebody you met online, whatever the reason. If a member asks for money, report to us and we will ban him/her right away. If you report to us after sending money, then we will ban both of you. The reason is simple: if nobody ever sends money, then nobody asks for it. Members who send money online are creating a market for scammers and we don’t want those members on our site. However, if a member asks for money and you don’t send any, we will be happy that you reported this member and will thank you for making My Transgender Date a better place.</p>
					</div>
				</div>
			</section>

			<h2>About browser support</h2>

			<section class="card my-4" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
				<div class="card-header" itemprop="name">
					<h3 id="browsers" class="h5 mb-0">What browsers does our site support?</h3>
				</div>

				<div class="card-body" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
					<div itemprop="text" class="answer">
						<p>We actively support the latest stable version of <strong>Chrome</strong>, <strong>Firefox</strong>, <strong>Safari</strong> and <strong>Edge</strong>. We also actively make sure that our site works well in <strong>iOS</strong> and <strong>Android</strong>.</p>
						<p>If you use another browser, or an older version, the site might not work properly. Our resources are limited, so we cannot actively develop or fix bugs for outdated browsers.</p>
					</div>
				</div>
			</section>

			<h2 class="mt-5">You didn’t find a satisfying answer in this page?</h2>

			<p class="mb-0">
				You can still contact us by email through our <a href="{{route('user.read.contact')}}">contact page</a>. Response time usually never exceeds 24 hours.
			</p>
		</div>
	</div>
</div>
@endsection

