<div class="row">
    <div class="col-md-8">
        {{ Form::checkbox('maintenance_mode', trans('setting::attributes.maintenance_mode'), trans('setting::settings.form.put_the_application_into_maintenance_mode'), $errors, $settings) }}
        {{ Form::textarea('allowed_ips', trans('setting::attributes.allowed_ips'), $errors, $settings, ['placeholder' => trans('setting::settings.form.ip_addreses_seperated_in_new_line')]) }}
    </div>
</div>
