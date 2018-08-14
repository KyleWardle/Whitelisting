<div class="row">
    <div class="col-sm-12">
        @include('layouts.dropdown', ['TypeModel'=>$TypeSDRank, 'Name'=>'SD_Rank', 'Title'=>'SD Rank', 'CurID'=>$Whitelist->SD_Rank, 'Required'=>true])
    </div>
</div>

<hr />

<div class="row">
    <div class="col-sm-6">
        @include('layouts.dropdown', ['TypeModel'=>$TypeSDAviation, 'Name'=>'SD_Aviation', 'Title'=>'Aviation', 'CurID'=>$Whitelist->SD_Aviation, 'Required'=>true])

        @include('layouts.dropdown', ['TypeModel'=>$TypeSDCID, 'Name'=>'SD_CID', 'Title'=>'CID', 'CurID'=>$Whitelist->SD_CID, 'Required'=>true])

        @include('layouts.dropdown', ['TypeModel'=>$TypeSDFTO, 'Name'=>'SD_FTO', 'Title'=>'FTO', 'CurID'=>$Whitelist->SD_FTO, 'Required'=>true])

        @include('layouts.dropdown', ['TypeModel'=>$TypeSDGU, 'Name'=>'SD_GU', 'Title'=>'Gang Unit', 'CurID'=>$Whitelist->SD_GU, 'Required'=>true])
    </div>
    <div class="col-sm-6">
        @include('layouts.dropdown', ['TypeModel'=>$TypeSDHP, 'Name'=>'SD_HP', 'Title'=>'Highway Patrol', 'CurID'=>$Whitelist->SD_HP, 'Required'=>true])

        @include('layouts.dropdown', ['TypeModel'=>$TypeSDIA, 'Name'=>'SD_IA', 'Title'=>'Internal Affairs', 'CurID'=>$Whitelist->SD_IA, 'Required'=>true])

        @include('layouts.dropdown', ['TypeModel'=>$TypeSDK9, 'Name'=>'SD_K9', 'Title'=>'K9', 'CurID'=>$Whitelist->SD_K9, 'Required'=>true])

        @include('layouts.dropdown', ['TypeModel'=>$TypeSDSERT, 'Name'=>'SD_SERT', 'Title'=>'SERT', 'CurID'=>$Whitelist->SD_SERT, 'Required'=>true])
    </div>
</div>
