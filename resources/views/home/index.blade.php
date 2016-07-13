@extends('layouts._two_columns_left_sidebar')

@section('content')
<section class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">个人照片</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th class="active text-center">考试照片</th>
                            <th class="active text-center">学历照片</th>
                        </tr>
                        <tr>
                            <td width="240" height="320" class="text-center">
                                <img src="{{ url('profile/portrait') }}" alt="无考试照片" width="240" class="img-rounded" ><br><br>
                                @if ($allowed)
                                    <div class="text-center">
                                        <a href="{{ url('profile/upfile') }}" role="button" class="btn btn-default">上传照片</a>
                                    </div>
                                @endif
                            </td>
                            <td width="240" height="320" class="text-center">
                                <img src="{{ url('profile/photo') }}" alt="无学历照片" width="240" class="img-rounded" ><br><br>
                                <p class="text-info">注意：如果该学历照片有问题，请向教务处学籍科反馈信息</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">基本资料</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th class="active">考生号</th>
                            <td>{{ $profile->ksh }}</td>
                            <th class="active">准考证号</th>
                            <td>{{ $profile->zkzh }}</td>
                            <th class="active">姓名</th>
                            <td>{{ $profile->xm }}</td>
                            <td class="active" colspan="2" rowspan="9">
                                <img src="{{ $profile->zp }}" alt="{{ $profile->xm }}" width="240" class="img-rounded" >
                            </td>
                        </tr>
                        <tr>
                            <th class="active">性别</th>
                            <td>{{ $profile->xbdm }}</td>
                            <th class="active">出生日期</th>
                            <td>{{ $profile->csny }}</td>
                            <th class="active">民族</th>
                            <td>{{ $profile->mzdm }}</td>
                        </tr>
                        <tr>
                            <th class="active">政治面貌</th>
                            <td>{{ $profile->zzmmdm }}</td>
                            <th class="active">身份证号</th>
                            <td>{{ $profile->sfzh }}</td>
                            <th class="active">考生类别</th>
                            <td>{{ $profile->kslbdm }}</td>
                        </tr>
                        <tr>
                            <th class="active">毕业类别</th>
                            <td>{{ $profile->bylbdm }}</td>
                            <th class="active">毕业中学</th>
                            <td>{{ $profile->zxmc }}</td>
                            <th class="active">外语语种</th>
                            <td>{{ $profile->wyyzdm }}</td>
                        </tr>
                        <tr>
                            <th class="active">地区</th>
                            <td>{{ $profile->dqmc }}</td>
                            <th class="active">考试类型</th>
                            <td>{{ $profile->kslxdm }}</td>
                            <th class="active">批次</th>
                            <td>{{ $profile->pcmc }}</td>
                        </tr>
                        <tr>
                            <th class="active">科类</th>
                            <td>{{ $profile->klmc }}</td>
                            <th class="active">投档成绩</th>
                            <td>{{ $profile->tdcj }}</td>
                            <th class="active">录取专业</th>
                            <td>{{ $profile->lqzy }}</td>
                        </tr>
                        <tr>
                            <th class="active">专业代码</th>
                            <td>{{ $profile->lqzydm }}</td>
                            <th class="active">院系</th>
                            <td>{{ $profile->ssyx }}</td>
                            <th class="active">学制</th>
                            <td>{{ $profile->xz }}</td>
                        </tr>
                        <tr>
                            <th class="active">是否师范</th>
                            <td>{{ $profile->sfsf }}</td>
                            <th class="active">投档志愿</th>
                            <td>{{ $profile->tdzy }}</td>
                            <th class="active">省市</th>
                            <td>{{ $profile->szss }}</td>
                        </tr>
                        <tr>
                            <th class="active">科目组</th>
                            <td>{{ $profile->tddwmc }}</td>
                            <th class="active">考生成绩</th>
                            <td>{{ $profile->cj }}</td>
                            <th class="active">特征成绩</th>
                            <td>{{ $profile->tzcj }}</td>
                        </tr>
                        <tr>
                            <th class="active">照顾分</th>
                            <td>{{ $profile->zgf }}</td>
                            <th class="active">超重点线</th>
                            <td>{{ $profile->czdxf }}</td>
                            <th class="active">语文</th>
                            <td>{{ $profile->rwcj }}</td>
                            <th class="active">数学</th>
                            <td>{{ $profile->sxcj }}</td>
                        </tr>
                        <tr>
                            <th class="active">英语</th>
                            <td>{{ $profile->yrcj }}</td>
                            <th class="active">招生年份</th>
                            <td>{{ $profile->nf }}</td>
                            <th class="active">家庭地址</th>
                            <td>{{ $profile->jtdz }}</td>
                            <th class="active">邮政编码</th>
                            <td>{{ $profile->yzbm }}</td>
                        </tr>
                        <tr>
                            <th class="active">联系电话</th>
                            <td>{{ $profile->lxdh }}</td>
                            <th class="active">考生特长</th>
                            <td>{{ $profile->kstc }}</td>
                            <th class="active">联系人</th>
                            <td>{{ $profile->sjr }}</td>
                            <th class="active">备注</th>
                            <td>{{ $profile->bz }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
            <div class="panel-heading">扩展资料</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered">
                        <tr>
                            <th class="active">班级</th>
                            <td>{{ $profile->bj }}</td>
                            <th class="active">学制</th>
                            <td>{{ $profile->xz }}</td>
                            <th class="active">年级</th>
                            <td>{{ $profile->nj }}</td>
                        </tr>
                        <tr>
                            <th class="active">办学形式</th>
                            <td>{{ $profile->approach->mc }}</td>
                            <th class="active">办学类型</th>
                            <td>{{ $profile->sctype->mc }}</td>
                            <th class="active">学习形式</th>
                            <td>{{ $profile->scform->mc }}</td>
                        </tr>
                        <tr>
                            <th class="active">招生季节</th>
                            <td>{{ $profile->season->mc }}</td>
                            <th class="active">加入日期</th>
                            <td>{{ $profile->jrrq }}</td>
                            <th class="active">师范类代码</th>
                            <td>{{ $profile->sfldm }}</td>
                        </tr>
                        <tr>
                            <th class="active">主修外语语种</th>
                            <td>{{ $profile->zxwyyz }}</td>
                            <th class="active">主修外语级别</th>
                            <td>{{ $profile->zxwyjb }}</td>
                            <th class="active">计算机等级</th>
                            <td>{{ $profile->jsjdj }}</td>
                        </tr>
                        <tr>
                            <th class="active">学籍状态</th>
                            <td>{{ $profile->status->mc }}</td>
                            <th class="active">专业类别</th>
                            <td colspan="3">{{ count($profile->rsfield) ? $profile->rsfield->mc : '' }}</td>
                        </tr>
                        <tr>
                            <th class="active">入学日期</th>
                            <td>{{ $profile->rxrq }}</td>
                            <th class="active">入学方式</th>
                            <td colspan="3">{{ $profile->entrance->mc }}</td>
                        </tr>
                        <tr>
                            <th class="active">考生号</th>
                            <td>{{ $profile->ksh }}</td>
                            <th class="active">中学名称</th>
                            <td colspan="3">{{ $profile->zxmc }}</td>
                        </tr>
                        <tr>
                            <th class="active">家长姓名</th>
                            <td>{{ $profile->jzxm }}</td>
                            <th class="active">联系电话</th>
                            <td colspan="3">{{ $profile->lxdh }}</td>
                        </tr>
                        <tr>
                            <th class="active">邮政编码</th>
                            <td>{{ $profile->yzbm }}</td>
                            <th class="active">家庭地址</th>
                            <td colspan="3">{{ $profile->jtdz }}</td>
                        </tr>
                        <tr>
                            <th class="active">特长</th>
                            <td>{{ $profile->tc }}</td>
                            <th class="active">火车到站</th>
                            <td colspan="3">{{ $profile->hcdz }}</td>
                        </tr>
                        <tr>
                            <th class="active">备注</th>
                            <td colspan="5">{{ $profile->bz }}</td>
                        </tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@stop