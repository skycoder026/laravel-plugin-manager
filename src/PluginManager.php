<?php

namespace Skycoder\LravelPluginManager;

use Skycoder\LravelPluginManager\Services\RepositoryCloneService;

class PluginManager
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
        $git = new RepositoryCloneService(base_path() . '/plugins', '', $pluginName);

        $git->removePlugin($git->dir . '/' . $pluginName);

        return $pluginName . ' plugin successfully removed';
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
