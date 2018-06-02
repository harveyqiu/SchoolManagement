@extends('society.template')

@section('content')
    <section class="section">

        <div class="container">
            <h3 class="title is-3" align="center" style="margin: 4%">创建属于自己的社团</h3>
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="label">社团名称</label>
                        <div class="control">
                            <input class="input" name="Name">
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label class="label">社长姓名</label>
                        <div class="control">
                            <input class="input" name="proprieter_name">
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label class="label">社长年级</label>
                        <div class="control">
                            <div class="select" style="width: 100%">
                                <select name="proprieter_grade" style="width: 100%">
                                    <option value="1">高一</option>
                                    <option value="2">高二</option>
                                    <option value="3">高三</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label class="label">社长班级</label>
                        <div class="control">
                            <div class="select" style="width: 100%">
                                <select name="proprieter_classroom" style="width: 100%">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label class="label">社长QQ号</label>
                        <div class="control">
                            <input class="input" type="number" name="proprieter_qq">
                        </div>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="label">是否立即招新</label>
                        <div class="control">
                            <label class="checkbox">
                                <input type="checkbox" name="recruit">
                                是否立即招新
                            </label>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label class="label">预申报社团类型</label>
                        <div class="control">
                            <div class="select" style="width: 100%">
                                <select name="type" style="width: 100%">
                                    <option value="1">自立精神</option>
                                    <option value="2">共生意识</option>
                                    <option value="3">科学态度</option>
                                    <option value="4">人文情怀</option>
                                    <option value="5">领袖气质</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label class="label">招新QQ群</label>
                        <div class="control">
                            <input class="input" type="number" name="qq_group">
                        </div>
                    </div>
                </div>
            </div>


            <div class="field">
                <label class="label">社团简介</label>
                <div class="control">
                    <textarea class="textarea" name="introduction"></textarea>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button class="button is-success" style="width: 100%">提交审核</button>
                    <hr>
                    <p align="center">提交审核后需要社团部批准方可开始招新</p>
                </div>
            </div>

        </div>
    </section>

@endsection