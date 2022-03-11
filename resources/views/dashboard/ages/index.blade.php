@extends('dashboard.layout.app')
@section('title', 'الأعمار')
@section('page')
  <a href="{{route('client.index')}}">الرئيسية</a>
@endsection
@section('content')
  <ages-index inline-template>
    <div class="card card-custom gutter-b">
      <div class="card-header d-flex justify-content-md-between py-3">
        <div class="card-title">
          <h3>الأعمار</h3>
        </div>
        <div class="card-toolbar">
          <a href="{{route('dashboard.ages.create')}}" class="btn btn-success">اضافة جديد</a>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table-component :data="fetchData" :show-caption="false" ref="table" :show-filter="false">
            <table-column show="tc_series" label="#"></table-column>
            <table-column show="age" label="العمر" class="font-weight-bolder"></table-column>
            <table-column show="cm" label="الطول(سم)"></table-column>
            <table-column show="inch" label="الطول(بوصة)"></table-column>
            <table-column show="eur" label="مقياس الحذاء(أوروبي)"></table-column>
            <table-column show="uk" label="مقياس الحذاء(بريطاني)"></table-column>
            <table-column show="usa" label="مقياس الحذاء(أمريكي)"></table-column>
            <table-column show="jap" label="مقياس الحذاء(ياباني)"></table-column>
            <table-column label="العمليات">
              <template slot-scope="row">
                <div class="d-flex justify-content-center">
                  <a :href="`/dashboard/ages/${row.id}/edit`" class="btn btn-primary btn-sm mx-2 d-inline-block">
                    <i class="fa fa-eye text-white"></i>
                  </a>
                  <button @click="deleteAge(row.id)" class="btn btn-danger btn-sm mx-2 d-inline-block">
                    <i class="fa fa-trash text-white"></i>
                  </button>
                </div>
              </template>
            </table-column>
          </table-component>
        </div>
      </div>
    </div>
  </ages-index>
@endsection