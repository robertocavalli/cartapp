<?php

namespace Modules\Setting\Http\Controllers\Admin;

use Illuminate\Support\Facades\Artisan;
use Modules\Admin\Ui\Facades\TabManager;
use Modules\Setting\Http\Requests\UpdateSettingRequest;

class SettingController
{
    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $settings = setting()->all();
        $tabs = TabManager::get('settings');

        return view('setting::admin.settings.edit', compact('settings', 'tabs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSettingRequest $request)
    {
        setting($request->except('_token', '_method'));

        $this->handleMaintenanceMode($request);

        return redirect(non_localized_url())
            ->with('success', trans('setting::messages.settings_have_been_saved'));
    }

    private function handleMaintenanceMode($request)
    {
        if ($request->maintenance_mode) {
            Artisan::call('down', [
                '--allow' => $this->allowedIps($request),
            ]);
        } elseif (app()->isDownForMaintenance()) {
            Artisan::call('up');
        }
    }

    private function allowedIps($request)
    {
        $ips = explode(PHP_EOL, $request->allowed_ips);

        return array_map(function ($ip) {
            return trim($ip, "\r\n");
        }, $ips);
    }
}
