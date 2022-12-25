<?php

namespace Skycoder\LravelPluginManager\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Skycoder\LravelPluginManager\Models\PluginManager;
use Skycoder\LravelPluginManager\Services\PluginManagerService;

class PluginManagerController extends Controller
{




    public function index()
    {

        $data['base_url'] = 'https://plugin-manager.freewirebd.com';

        $data['installedPlugins'] = PluginManager::active()->pluck('plugin_id')->toArray();

        $data['allPlugins'] = Http::get($data['base_url'] . '/api/get-plugin-list')['data'];

        return view('plugin-manager::plugin-manager/plugins/index', $data);
    }







    public function installPlugin(Request $request, $id)
    {
        $pluginManagerService = new PluginManagerService();

        $pluginManagerService->installPlugin($request->author, $request->branch, $request->repository, $request->name);


        PluginManager::firstOrCreate(['plugin_id' => $id]);

        return response()->json([

            'status'        => 1,
            'message'       => 'Plugin Successfully Installed',
            'data'          => [],
        ]);
    }







    public function uninstallPlugin(Request $request, $id)
    {
        $pluginManagerService = new PluginManagerService();

        $pluginManagerService->uninstallPlugin($request->name);


        PluginManager::where('plugin_id', $id)->delete();

        return response()->json([

            'status'        => 1,
            'message'       => 'Plugin Successfully Uninstalled',
            'data'          => [],
        ]);
    }
















    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PluginManager  $pluginManager
     * @return \Illuminate\Http\Response
     */
    public function show(PluginManager $pluginManager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PluginManager  $pluginManager
     * @return \Illuminate\Http\Response
     */
    public function edit(PluginManager $pluginManager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PluginManager  $pluginManager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PluginManager $pluginManager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PluginManager  $pluginManager
     * @return \Illuminate\Http\Response
     */
    public function destroy(PluginManager $pluginManager)
    {
        //
    }
}
