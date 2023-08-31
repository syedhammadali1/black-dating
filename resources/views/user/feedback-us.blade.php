@section('page-title', __tr('Feedback Us'))
@section('head-title', __tr('Feedback Us'))
@section('keywordName', __tr('Feedback Us'))
@section('keyword', __tr('Feedback Us'))
@section('description', __tr('Feedback Us'))
@section('keywordDescription', __tr('Feedback Us'))
@section('page-image', getStoreSettings('logo_image_url'))
@section('twitter-card-image', getStoreSettings('logo_image_url'))
@section('page-url', url()->current())

@if(session()->has('ssmessage'))
	<p class="alert alert-success">
		{{ session()->get('ssmessage') }}
	</p>
@endif
@if(session()->has('infomessage'))
	<p class="alert alert-info">
		{{ session()->get('infomessage') }}
	</p>
@endif

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
	<h1 class="h3 mb-0 text-gray-200"><?= __tr('Leave you feedback') ?></h1>
</div>

<div class="row">
	<div class="col-xl-12 mb-4">
		<!-- if user password is not password then show info message -->
{{--		@dd($reviwed)--}}
{{--		@if(isset($reviwed) && $reviwed ==1)--}}
{{--		<!-- info message -->--}}
{{--		<div class="alert alert-info">--}}
{{--			<?= __tr('You have already shared your feedback with us, Thanks') ?>--}}
{{--		</div>--}}
{{--        @else--}}
		<!-- / info message -->
		
		<!-- /if user password is not password then show info message -->

		<!-- change password form -->
		<div class="card mb-4">
			<div class="card-body">
				<!-- change password form -->
{{--				<form class="lw-ajax-form lw-form" method="post" action="<?= route('user.feedback_us_post') ?>">--}}
				<form class="lw-ajax-formmm lw-form" method="post" action="<?= route('user.feedback_us_post') ?>">
					@csrf
					<!-- current password input field -->

					<!-- / current password input field -->

					<!-- new confirmation password input field -->
					<div class="form-group row">
						<div class="col-sm-6 mb-3 mb-sm-0">
							<label for="company"><?= __tr('Company') ?></label>
							<input class="form-control" name="company" required>
						</div>
						<div class="col-sm-6">
							<label for="designation"><?= __tr('Designation') ?></label>
							<input class="form-control" name="designation" required>
						</div>
					</div>
                    <div class="form-group">
						<label for="feedback"><?= __tr('Feedback') ?></label>
						<textarea class="form-control" name="feedback" required>
                        </textarea>
					</div>
					<!-- / new confirmation password input field -->

					<!-- update Password button -->
{{--					<button type="submit" class="lw-ajax-form-submit-action btn btn-primary btn-user lw-btn-block-mobile"><?= __tr('Submit') ?></button>--}}
					<button type="submit" class="btn btn-primary btn-user lw-btn-block-mobile"><?= __tr('Submit') ?></button>
					<!-- / update Password button -->
				</form>
				<!-- /change password form -->
			</div>
		</div>
{{--        @endif--}}
		<!-- /change password form -->
	</div>
</div>
@push('appScripts')
<script>
	function onChangePasswordCallback(response) {
		if (response.reaction == 1) {
			$("#lwChangePasswordForm")[0].reset();
		}
	}
</script>
@endpush