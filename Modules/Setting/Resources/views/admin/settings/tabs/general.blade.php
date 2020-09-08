<div class="row">
    <div class="col-md-8">
        {{ Form::select('supported_countries', trans('setting::attributes.supported_countries'), $errors, $countries, $settings, ['class' => 'selectize prevent-creation', 'required' => true, 'multiple' => true]) }}
        {{ Form::select('default_country', trans('setting::attributes.default_country'), $errors, $countries, $settings, ['required' => true]) }}
        {{ Form::select('supported_locales', trans('setting::attributes.supported_locales'), $errors, $locales, $settings, ['class' => 'selectize prevent-creation', 'required' => true, 'multiple' => true]) }}
        {{ Form::select('default_locale', trans('setting::attributes.default_locale'), $errors, $locales, $settings, ['required' => true]) }}
        {{ Form::select('default_timezone', trans('setting::attributes.default_timezone'), $errors, $timeZones, $settings, ['required' => true]) }}
        {{ Form::select('customer_role', trans('setting::attributes.customer_role'), $errors, $roles, $settings, ['required' => true]) }}
        {{ Form::checkbox('reviews_enabled', trans('setting::attributes.reviews_enabled'), trans('setting::settings.form.allow_reviews'), $errors, $settings) }}
        {{ Form::checkbox('auto_approve_reviews', trans('setting::attributes.auto_approve_reviews'), trans('setting::settings.form.approve_reviews_automatically'), $errors, $settings) }}
        {{ Form::checkbox('welcome_email', trans('setting::attributes.welcome_email'), trans('setting::settings.form.send_welcome_email_after_registration'), $errors, $settings) }}
        {{ Form::checkbox('admin_order_email', trans('setting::attributes.admin_order_email'), trans('setting::settings.form.send_order_notification_to_admin'), $errors, $settings) }}
        {{ Form::checkbox('order_status_email', trans('setting::attributes.order_status_email'), trans('setting::settings.form.send_email_after_order_status_changed'), $errors, $settings) }}
        {{ Form::checkbox('invoice_email', trans('setting::attributes.invoice_email'), trans('setting::settings.form.send_invoice_email'), $errors, $settings) }}
        {{ Form::checkbox('cookie_bar_enabled', trans('setting::attributes.cookie_bar_enabled'), trans('setting::settings.form.show_cookie_bar'), $errors, $settings) }}
    </div>
</div>
