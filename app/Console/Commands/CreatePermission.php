<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\PermissionCategory;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreatePermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:permission {name} {--type=create} {--category=ba} {--title=null}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $options = $this->options();
        $permissionCategory = PermissionCategory::where('name', $this->argument('name'))->first();
        if (!$permissionCategory) {
            $permissionCategory = new PermissionCategory;
            $permissionCategory->name = $this->argument('name');
        }
        if ($options['title'] != 'null') {
            $permissionCategory->title = $options['title'];
        }
        $permissionCategory->type = $options['category'];
        $permissionCategory->status = 'Active';
        if ($options['type'] == 'create') {
            $permissionCategory->save();
        } elseif ($options['type'] == 'delete') {
            $permissionCategory->delete();
        }

        if ($options['type'] == 'create') {
            Permission::create(['name' => 'view ' . $this->argument('name')]);
            Permission::create(['name' => 'edit ' . $this->argument('name')]);
            Permission::create(['name' => 'delete ' . $this->argument('name')]);
        } elseif ($options['type'] == 'delete') {
            Permission::where('name', 'view ' . $this->argument('name'))->delete();
            Permission::where('name', 'edit ' . $this->argument('name'))->delete();
            Permission::where('name', 'delete ' . $this->argument('name'))->delete();
        }
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $this->info('Successfully Created This ' . $this->argument('name') . ' Permission');
    }
}
