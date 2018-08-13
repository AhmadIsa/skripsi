@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Keyakinan Umur
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($keyakinanUmur, ['route' => ['keyakinanUmurs.update', $keyakinanUmur->id], 'method' => 'patch']) !!}

                        @include('keyakinan_umurs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection