@extends('layouts.masterapp')
@section('content')

                <section role="main" class="content-body">
                    <header class="page-header">
                        <h2>.: Log Files :.</h2>
                    
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                            </ol>
                    
                            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </header>

                    @include('layouts.message')

                    <!-- start: page -->
                        <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                </div>
                        
                                <h2 class="panel-title">Detail Surat Keterangan Aktif</h2>
                            </header>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped table-condensed mb-none">
                                <thead>
                                  <tr>
                                    <th style="background-color:Silver"><center>#</center></th>
                                    <th style="background-color:Silver"><center>Nama File</center></th>
                                    <th style="background-color:Silver"><center>Ukuran File</center></th>
                                    <th style="background-color:Silver"><center>Waktu</center></th>
                                    <th style="background-color:Silver"><center>{{trans(app.action)}}</center></th>
                                  </tr>
                                </thead>
                                    <tbody>
                                         @forelse($logFiles as $key => $logFile)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $logFile->getFilename() }}</td>
                                            <td>{{ $logFile->getSize() }}</td>
                                            <td>{{ date('Y-m-d H:i:s', $logFile->getMTime()) }}</td>
                                            <td>
                                                <a href="{{ route('log-files.show', $logFile->getFilename()) }}" title="Show file {{ $logFile->getFilename() }}">View</a> |
                                                <a href="{{ route('log-files.download', $logFile->getFilename()) }}" title="Download file {{ $logFile->getFilename() }}">Download</a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="3">No Log File Exists</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </section>
                </section>

@endsection