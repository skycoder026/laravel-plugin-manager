<?php

namespace Skycoder\LravelPluginManager\Services;

use Skycoder\LravelPluginManager\Services\RepositoryCloneService;

class PluginManagerService
{

    public $author          = 'skycoder026';
    public $branch          = 'master';
    public $repository      = 'query-shorter';
    public $pluginName      = 'LaravelQueryShorter';











    /*
     |--------------------------------------------------------------------------
     | INSTALL NEW PLUGIN
     |--------------------------------------------------------------------------
    */
    public function installPlugin($author, $branch, $repository, $pluginName)
    {



        $git = new RepositoryCloneService(base_path() . '/plugins', $repository, $pluginName);


        $git->clone($author, $repository, $branch);


        return $pluginName . ' plugin successfully added';
    }









    /*
     |--------------------------------------------------------------------------
     | REMOVE EXISTING PLUGIN
     |--------------------------------------------------------------------------
    */
    public function uninstallPlugin($pluginName)
    {
        $dir = base_path() . DIRECTORY_SEPARATOR . 'plugins' . DIRECTORY_SEPARATOR . $pluginName;

        $this->removePlugin($dir);

        return $pluginName . ' plugin successfully removed';
    }





    /*
     |--------------------------------------------------------------------------
     | REMOVE PLUGIN FROM LOCAL
     |--------------------------------------------------------------------------
    */
    public function removePlugin($dir)
    {
        $files = array_diff(scandir($dir), array('.','..'));

        foreach ($files as $file) {
            (is_dir("$dir/$file")) ? $this->removePlugin("$dir/$file") : unlink("$dir/$file");
        }

        return rmdir($dir);
    }





    /*
     |--------------------------------------------------------------------------
     | SET AUTHOR
     |--------------------------------------------------------------------------
    */
    public function setAuthor($author)
    {

        $this->author = $author;

        return $this;
    }





    /*
     |--------------------------------------------------------------------------
     | SET REPOSITORY
     |--------------------------------------------------------------------------
    */
    public function setRepository($repository)
    {

        $this->repository = $repository;

        return $this;
    }





    /*
     |--------------------------------------------------------------------------
     | SET BRANCH
     |--------------------------------------------------------------------------
    */
    public function setBranch($branch)
    {

        $this->branch = $branch;

        return $this;
    }





    /*
     |--------------------------------------------------------------------------
     | SET PLUGIN NAME
     |--------------------------------------------------------------------------
    */
    public function setPluginName($pluginName)
    {

        $this->pluginName = $pluginName;

        return $this;
    }
}
