<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CleanUp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     * @TODO till march 2017.
     * (07:58:10)  Girts: ok - so basically - you first use the SELECT WHERE to gather the IDs of the documents you want to delete, and then feed it as an array to something like this:
     * (07:58:24)  Girts: / delete 100000 documents from DB $results = $collection->limit(100000)->get(); $ids = []; foreach ($results as $row) { $ids[] = $row->_id; } if (count($ids) > 0){ $collection->deleteMany($ids); }
     * (07:58:54)  Girts: it's deleteMany command in our PHP API
     * (07:59:10)  John Dosje: ok , I'll check it out ;)
     * (07:59:12)  John Dosje: tnx
     * (08:00:01)  Girts: Documentation link here: https://www.clusterpoint.com/docs/api/4/php/348/delete
     */
    protected $signature = 'command:name';

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
        //
    }
}
