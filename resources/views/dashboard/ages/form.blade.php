@extends('dashboard.layout.app')
@section('title', isset($age) ? 'تعديل عمر' : 'إضافة عمر')
@section('page')
  <a href="{{route('client.index')}}">الرئيسية</a>
@endsection
@section('content')
  <ages-form inline-template :_age="{{isset($age) ? $age->toJson() : 'null'}}">
    <div class="card">
      <div class="card-header d-flex justify-content-md-between py-3">
        <div class="card-title">
          <h3>{{isset($age) ? 'تعديل عمر' : 'إضافة عمر'}}</h3>
        </div>
        <div class="card-toolbar">
          <a href="{{route('dashboard.ages.index')}}" class="btn btn-success">رجوع</a>
        </div>
      </div>
      <form @submit.prevent="save()" action="" class="form">
        <div class="card-body">
            <div class="form-group row">
             <fg-input v-model="age" name="age" required label="العمر" class="col-md-4 my-2"></fg-input>
             <img-upload v-model="male_img" img_width="420" img_height="200"  ref="maleImg" label="صورة الذكر" old="{{isset($age) ? $age->male_img ? asset($age->male_img) : null : null}}" name="male_img" class="col-md-4 my-3"></img-upload>
             <img-upload v-model="female_img" img_width="420" img_height="200"  ref="maleImg" label="صورة الأنثى" old="{{isset($age) ? $age->female_img ? asset($age->female_img) : null : null}}" name="female_img" class="col-md-4 my-3"></img-upload>
           </div>
            <div class="form-group row">
              <div class="col-md-12">
                <p class="font-weight-bold">مقاسات الملابس</p>
              </div>
              <fg-input v-model="cm" name="cm" type="number" required label="الطول(سم)" class="col-md-6 my-2"></fg-input>
              <fg-input v-model="inch" name="inch" type="number" required label="الطول(بوصة)" class="col-md-6 my-2"></fg-input>

            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <p class="font-weight-bold">مقاسات الأحذية</p>
              </div>
              <fg-input v-model="eur" name="eur" type="number" required label="أوروبي" class="col-md-6 my-2"></fg-input>
              <fg-input v-model="uk" name="uk" type="number" required label="بريطاني" class="col-md-6 my-2"></fg-input>
              <fg-input v-model="usa" name="usa" type="number" required label="أمريكي" class="col-md-6 my-2"></fg-input>
              <fg-input v-model="jap" name="jap" type="number" required label="ياباني" class="col-md-6 my-2"></fg-input>

            </div>

        </div>
        <div class="card-footer">
          <button @click="save()" :disabled="disabledButtons" type="submit" class="btn btn-primary mr-2"><i v-if="requestForm.loading" class="fa fa-spinner fa-spin"></i>حفظ</button>
          <a href="{{route('dashboard.ages.index')}}" type="button" class="btn btn-secondary">رجوع</a>
        </div>
      </form>
    </div>
  </ages-form>
@endsection