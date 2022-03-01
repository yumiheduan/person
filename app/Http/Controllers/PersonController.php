<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Requests\PersonRequest;
use Illuminate\Support\Facades\Auth;

class PersonController extends Controller
{
     /**
      * 一覧を表示する
      *
      * @var $people App\Models\Person;
      * @return \Illuminate\Http\Response
      */
    public function index()
    {
        $people = Person::all();
        return view('people.index', ['people' => $people]);
    }

    /**
     * 新規登録画面を表示する
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Person $person)
    {
        return view('people.create');
    }

    /**
     * 新規登録を行う
     *
     * @param string $name 名前
     * @param string $mail メールアドレス
     * @param int $age 年齢
     * @param string $sex 性別
     * @var $person App\Models\Person;
     * @return \Illuminate\Http\Response
     */
    public function store(PersonRequest $request)
    {
        // 新規登録時に名前の二重登録をチェックする
        $validate_rule = [
            'name' => 'unique:people,name'
        ];
        $this->validate($request, $validate_rule);

        $person = new Person();
        $person->fill($request->all());
        $person->save();

        return redirect('/person');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * 更新登録画面を表示する
     *
     * @param  int  $id
     * @var $person App\Models\Person;
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = Person::find($id);
        return view('people.edit', ['person' => $person]);
    }

    /**
     * 更新登録を行う
     *
     * @param  \Illuminate\Http\Request  $request
     * @var $person App\Models\Person;
     * @return \Illuminate\Http\Response
     */

    public function update(PersonRequest $request)
    {
        $person = Person::find($request->id);
        $person->fill($request->all())->save();
        return redirect('/person');
    }

    /**
     * 登録削除を行う（物理的削除）
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Person::find($id)->delete();
        return redirect('/person');
    }
}
