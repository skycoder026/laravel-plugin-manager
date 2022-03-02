<?php

namespace Skycoder\LravelPluginManager;

use Skycoder\LravelPluginManager\Service\RepositoryCloneService;

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
    public function installPlugin()
    {

        $git = new RepositoryCloneService(base_path() . '/plugins', $this->repository);


        $git->clone($this->author, $this->repository, $this->branch);


        return $this->pluginName . ' plugin successfully added';
    }









    /*
     |--------------------------------------------------------------------------
     | REMOVE EXISTING PLUGIN
     |--------------------------------------------------------------------------
    */
    public function uninstallPlugin()
    {
        $git = new RepositoryCloneService(base_path() . '/plugins', $this->pluginName);

        $git->removePlugin($git->dir . '/' . $this->pluginName);

        return $this->pluginName . ' plugin successfully removed';
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
