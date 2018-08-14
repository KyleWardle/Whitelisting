<div class="row">
    <div class="col-sm-12">
        @include('layouts.dropdown', ['TypeModel'=>$TypeEMSRank, 'Name'=>'EMS_Rank', 'Title'=>'EMS Rank', 'CurID'=>$Whitelist->EMS_Rank, 'Required'=>true])
    </div>
</div>

<hr />

<div class="row">
    <div class="col-sm-6">
        @include('layouts.dropdown', ['TypeModel'=>$TypeEMSAviation, 'Name'=>'EMS_Aviation', 'Title'=>'EMS Aviation', 'CurID'=>$Whitelist->EMS_Aviation, 'Required'=>true])
    </div>
    <div class="col-sm-6">
        @include('layouts.dropdown', ['TypeModel'=>$TypeEMSFD, 'Name'=>'EMS_FD', 'Title'=>'EMS FD', 'CurID'=>$Whitelist->EMS_FD, 'Required'=>true])
    </div>
</div>
