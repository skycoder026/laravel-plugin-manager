<?php

namespace Skycoder\LravelPluginManager\Services;



use Curl\Curl;
use ZipArchive;
use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;

/*
 * Clone a Github repository with PHP & ZipArchive. Without using Git or exec()!
 */
class RepositoryCloneService
{
    private     $curl;
    public      $dir;
    private     $fs;
    public      $repo;
    public      $pluginName;


    /*
     |--------------------------------------------------------------------------
     | CONSTRUCTOR
     |--------------------------------------------------------------------------
    */
    function __construct($dir, $repository, $pluginName)
    {
        $this->repo = $repository;
        $this->pluginName = $pluginName;

        $this->curl = new Curl;
        $this->dir  = $dir;
        $this->fs   = new Filesystem(new Local($dir));
    }


    /*
     |--------------------------------------------------------------------------
     | DESTRUCTOR
     |--------------------------------------------------------------------------
    */
    function __destruct()
    {
        $this->curl->close();
    }











    /*
     |--------------------------------------------------------------------------
     | CLONE PLUGIN FROM GITHUB
     |--------------------------------------------------------------------------
    */
    public function clone($author, $repo, $branch)
    {

        $contents = $this->get('https://codeload.github.com/' . $author . '/' . $repo . '/zip/' . $branch);
        $absolute = $this->dir . '/' ;





        $this->fs->put($repo . '.zip', $contents);

        $zip = new ZipArchive;

        $zip->open($absolute . $repo . '.zip');


        $zip->extractTo($absolute);

        $zip->close();


        $this->fs->delete($repo . '.zip');


        if (is_dir($absolute . '/' . $this->pluginName)) {

            $dir = $absolute . '/' . $this->pluginName;

            $this->removePlugin($dir);
        }

        $this->fs->rename($repo . '-' . $branch, $this->pluginName);

    }















    /*
     |--------------------------------------------------------------------------
     | GET PLUGIN CONTENT
     |--------------------------------------------------------------------------
    */
    private function get($url)
    {
        $this->curl->get($url);

        if ($this->curl->error)
            return 'Curl error: ' . $this->curl->error_code;

        return $this->curl->response;
    }
}
