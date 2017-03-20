<div>
    
トップページの更新


<div>以下のコンテンツを入れ替えられます。
 <li>サイトテーマ：ファイル名：siteTheme.html</li>
 <li>サイトサブタイトル：ファイル名：siteSubTheme.html</li>
 <li>ウェルカムメッセージ：ファイル名：welcomeMessage.html</li>
 <li>いくつかの図表：ファイル名：someChart.json</li>
 <li>クールな仕事：ファイル名：coolWorks.json</li>
 <li>ホワイトクション：ファイル名：whitesection.html</li>
 <li>グレイクション：ファイル名：greySection.html</li>
 <li>フッターセクション：ファイル名：footerSection.html</li>
</div>    
また画像を指定すると同じ名前の画像を入れ替えます。


{{Form::open(array('url' => '/admin_root_update', 'files' => true))}}

<input type="hidden" name="_token" value="{{csrf_token()}}">

<div>file：{{Form::file('filename')}}</div>



{{Form::submit('コンテンツのファイルを入れ替え')}}
{{Form::close()}}


</div> 