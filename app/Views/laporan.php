<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div ng-controller="laporanController">
    <h1 class="h3 mb-4 text-gray-800">{{setTitle}}</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <form ng-submit="save()">
                        <div class="form-group pmd-textfield">
                            <label class="control-label">Periode</label>
                            <select class="form-control" ng-options="item.periode for item in periodes" ng-model="periode" ng-change="hitung(periode)">
                            </select>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive" ng-show="datas.alternatif.length>0">
                        <table class="table pmd-table table-sm">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kode</th>
                                    <th>Nilai Optimasi</th>
                                    <th>Jurusan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="item in datas.alternatif">
                                    <td>{{$index+1}}</td>
                                    <td>{{item.nama}}</td>
                                    <td>{{item.kode}}</td>
                                    <td>{{item.preferensi}}</td>
                                    <td>{{$index<=27 ? 'IPA' : 'IPS'}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>