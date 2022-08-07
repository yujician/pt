<div class="row mt-2">
  <div class="row">
  <div class="col-sm-12 text-center">
  @for($i = 0; $i < $tab_count;$i++)
    @if($i == $page_num)
      <button type="button" class="btn btn-secondary page_bt" value="{{$i}}">{{$i + 1}}</button>
    @else
      <button type="button" class="btn btn-outline-secondary page_bt" value="{{$i}}">{{$i + 1}}</button>
    @endif
  @endfor
  </div>
  </div>
  @foreach($data_list as $list)
  <div class="col-6 col-md-2 p-2">
    <img src="{{$list['img']}}" class="w-100 show_modal_bt" value="{{$list['id']}}" title="{{$list['title']}}">
    <p>{{$list['title']}}</p>
  </div>
  @endforeach
  <div class="row">
  <div class="col-sm-12 text-center pb-3">
  @for($i = 0; $i < $tab_count;$i++)
    @if($i == $page_num)
      <button type="button" class="btn btn-secondary page_bt" value="{{$i}}">{{$i + 1}}</button>
    @else
      <button type="button" class="btn btn-outline-secondary page_bt" value="{{$i}}">{{$i + 1}}</button>
    @endif
  @endfor
  </div>
  </div>
</div>
