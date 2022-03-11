@extends('dashboard.layout.app')
@section('title', 'المقاسات')
@section('page')
    <a href="{{route('dashboard.index')}}">لوحة التحكم</a>
@endsection
@section('content')
    <client-index inline-template :ages="{{isset($ages) ? $ages->toJson() : 'null'}}">
        <div class="container my-4">
            <div class="row">
                <div class="col-md-6 right">
                    <h1>جدول المقاسات</h1>
                    <p>يهمنا أن يكون مقاس الملابس التي تشتروها مناسبة تماماً. لذا يُرجى إختيار عمر الطفل ،وحدة القياس، و مقاس الحذاء
                        ليتسنى لنا مساعدتك لإيجاد المقاس المناسب.</p>
                    <form class="mt-5">
                        <div class="form-group row">
                            <label for="gender" class="col-sm-2 col-form-label">الجنس</label>
                            <div class="col-sm-10">
                                <div class="form-check d-inline-block">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" v-model="gender" value="male" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        ذكر
                                    </label>
                                </div>
                                <div class="form-check d-inline-block">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" v-model="gender" value="female">
                                    <label class="form-check-label" for="gridRadios2">
                                        أنثى
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">العمر</label>
                            <div class="col-sm-10">
                                <select  v-model="age" class="form-control" id="exampleFormControlSelect1">
                                    <option v-for="age in ages" :value="age">@{{ age.age }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">مقاس الحذاء</label>
                            <div class="col-sm-10">
                                <select v-model="shoes_unit" class="form-control" id="exampleFormControlSelect1">
                                    <option value="eur">مقاس أوروبي</option>
                                    <option value="uk">مقاس بريطاني</option>
                                    <option value="usa">مقاس أمريكي</option>
                                    <option value="jap">مقاس ياباني</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="unit" class="col-sm-2 col-form-label">وحدة القياس</label>
                            <div class="col-sm-10">
                                <div class="form-check d-inline-block">
                                    <input v-model="unit" class="form-check-input" type="radio" name="unit" id="unit1" value="cm" checked>
                                    <label class="form-check-label" for="unit1">
                                        سم
                                    </label>
                                </div>
                                <div class="form-check d-inline-block">
                                    <input v-model="unit" class="form-check-input" type="radio" name="unit" id="unit2" value="inch">
                                    <label class="form-check-label" for="unit2">
                                        بوصة
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 left">
                    <div class="row text-center">
                        <div class="col-md-6">
                            <span>الطول: @{{ tall }} </span>
                            <span>@{{ unit == 'cm' ? 'سم': 'بوصة' }}</span>
                        </div>
                        <div class="col-md-6">
                            <span>مقاس الحذاء: @{{ shoes }}</span>
                            <span class="text-uppercase">@{{ shoes_unit }}</span>
                        </div>
                    </div>
                    <div class="img mt-4 text-center">
                        <img v-if="image" :src="`${BASE_URL}/${image}`" width="300" height="300" class="text-center img-fluid" alt="">
                        <img v-else src="{{asset('no-user.png')}}" class="text-center" alt="">
                    </div>
                </div>
            </div>
            <div class="info mt-4">
                <div class="">
                    <div class="icon d-inline-block ">
                        <svg class="mobile-hide" viewBox="0 0 1024 1024" id="kh">
                            <path
                                    d="M670 324l117 117-122 122-45-45 45-45H362l45 45-45 45-122-122 117-117 45 45-40 40h303l-40-40 45-45zm129 53v476c0 76-62 137-137 137H362c-75 0-137-61-137-137V377L44 313l80-221c21-36 59-58 101-58h93c22 71 80 120 146 120h96c66 0 124-49 146-120h93c42 0 80 22 101 58l80 221-181 64zM931 78C905 30 854 0 799 0H679c-11 68-60 119-119 119h-96c-59 0-108-51-119-119H225C170 0 119 30 93 78L0 334l191 67v452c0 95 77 171 171 171h300c94 0 171-76 171-171V401l191-67-93-256z">
                            </path>
                        </svg>
                    </div>
                    <div class="text d-inline-block ml-3">
                        <h3>جدول المقاسات</h3>
                        <p>دليل عملي لجميع المقاسات و الأعمار المختلفى</p>
                    </div>
                </div>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">مقاييس الملابس</a>
                        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">مقاسات الأحذية</a>
                    </div>
                </nav>
                <div class="tab-content mt-5" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <td>العمر التقريبي</td>
                                    <td>الطول(سم)</td>
                                    <td>الطول(بوصة)</td>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="a in ages" :style="{backgroundColor: a.id === age.id ? '#ddd' : ''}">
                                    <td>@{{ a.age }}</td>
                                    <td>@{{ a.cm }} سم</td>
                                    <td>@{{ a.inch }} بوصة</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <td>العمر التقريبي</td>
                                    <td>أوروبي</td>
                                    <td>بريطاني</td>
                                    <td>أمريكي</td>
                                    <td>ياباني</td>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="a in ages" :style="{backgroundColor: a.id === age.id ? '#ddd' : ''}">
                                    <td>@{{ a.age }}</td>
                                    <td>@{{ a.eur }}</td>
                                    <td>@{{ a.uk }}</td>
                                    <td>@{{ a.usa }}</td>
                                    <td>@{{ a.jap }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </client-index>
@endsection