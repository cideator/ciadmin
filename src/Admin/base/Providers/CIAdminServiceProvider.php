<?php

namespace CIAdmin\Providers;


class CIAdminServiceProvider extends ServiceProvider
{

    protected $bootstrapers = ['Support', 'Foundation', 'Template'];

    /**
     * Register service provider
     *
     * @return void
     */
    public function register(){
        foreach (array_unique(array_merge($this->bootstrapers, (is_array($this->config['csys.dependencies'])?
            $this->config['csys.dependencies'] : []))) as $name)
            $this->bootstraper = $name;

        $this->models->load($this->config['models']);
    }

}