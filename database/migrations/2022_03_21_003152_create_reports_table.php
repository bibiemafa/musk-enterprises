<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->text('site_name');
            $table->text('work_area');
            $table->text('supervisor');
            $table->text('completed_by');
            $table->text('job_description');
            $table->text('inspector');
            $table->text('date_inspected');
            $table->text('type');
            $table->text('wah_intervention');
            $table->text('wah_comment');
            $table->text('wah_completed');
            $table->text('wah_action');
            $table->text('lo_intervention');
            $table->text('lo_comment');
            $table->text('lo_completed');
            $table->text('lo_action');
            $table->text('cet_intervention');
            $table->text('cet_comment');
            $table->text('cet_completed');
            $table->text('cet_action');
            $table->text('con_intervention');
            $table->text('con_comment');
            $table->text('con_completed');
            $table->text('con_action');
            $table->text('el_intervention');
            $table->text('el_comment');
            $table->text('el_completed');
            $table->text('el_action');
            $table->text('st_intervention');
            $table->text('st_comment');
            $table->text('st_completed');
            $table->text('st_action');
            $table->text('pw_intervention');
            $table->text('pw_comment');
            $table->text('pw_completed');
            $table->text('pw_action');
            $table->text('ct_intervention');
            $table->text('ct_comment');
            $table->text('ct_completed');
            $table->text('ct_action');
            $table->text('sr_intervention');
            $table->text('sr_comment');
            $table->text('sr_completed');
            $table->text('sr_action');
            $table->text('iso_intervention');
            $table->text('iso_comment');
            $table->text('iso_completed');
            $table->text('iso_action');
            $table->text('fr_intervention');
            $table->text('fr_comment');
            $table->text('fr_completed');
            $table->text('fr_action');
            $table->text('aw_intervention');
            $table->text('aw_comment');
            $table->text('aw_completed');
            $table->text('aw_action');
            $table->text('wm_intervention');
            $table->text('wm_comment');
            $table->text('wm_completed');
            $table->text('wm_action');
            $table->text('pc_intervention');
            $table->text('pc_comment');
            $table->text('pc_completed');
            $table->text('pc_action');
            $table->text('ca_intervention');
            $table->text('ca_comment');
            $table->text('ca_completed');
            $table->text('ca_action');
            $table->text('pp_intervention');
            $table->text('pp_comment');
            $table->text('pp_completed');
            $table->text('pp_action');
            $table->text('mh_intervention');
            $table->text('mh_comment');
            $table->text('mh_completed');
            $table->text('mh_action');
            $table->text('oc_intervention');
            $table->text('oc_comment');
            $table->text('oc_completed');
            $table->text('oc_action');
            $table->text('pt_intervention');
            $table->text('pt_comment');
            $table->text('pt_completed');
            $table->text('pt_action');
            $table->text('vd_intervention');
            $table->text('vd_comment');
            $table->text('vd_completed');
            $table->text('vd_action');
            $table->text('tu_intervention');
            $table->text('tu_comment');
            $table->text('tu_completed');
            $table->text('tu_action');
            $table->text('vc_intervention');
            $table->text('vc_comment');
            $table->text('vc_completed');
            $table->text('vc_action');
            $table->text('vl_intervention');
            $table->text('vl_comment');
            $table->text('vl_completed');
            $table->text('vl_action');
            $table->text('vs_intervention');
            $table->text('vs_comment');
            $table->text('vs_completed');
            $table->text('vs_action');
            $table->text('tt_work_station');
            $table->text('tt_quality');
            $table->text('tt_site_rules');
            $table->text('tt_environment');
            $table->text('tt_p_individuals');
            $table->text('tt_tools');
            $table->text('tt_miscellaneous');
            $table->text('tt_overal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
