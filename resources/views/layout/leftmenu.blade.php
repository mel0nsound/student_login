<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Blank Page</a>
      <div class="left-sidebar-spacer">
        <div class="left-sidebar-scroll">
          <div class="left-sidebar-content">
            <ul class="sidebar-elements">
              <li class="divider">Menu</li>
              <li class="{{($page=='home')?'active':''}}"><a href="{{route('indexhome')}}"><i class="icon mdi mdi-home"></i><span>หน้าแรก</span></a>  
                {{-- เป็นการเช็คifหน้าที่เราactiveว่าอยู่หน้าhomeไหม --}}
              <li class="{{($page=='tablelist')?'active':''}}"><a href="{{route('tablelist')}}"><i class="icon mdi mdi-view-list-alt"></i><span>แสดงข้อมูล</span></a>
              <li class="{{($page=='addlist')?'active':''}}"><a href="{{route('addlist')}}"><i class="icon mdi mdi-plus"></i><span>เพิ่มข้อมูล</span></a>
              </li>
              {{-- <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>DATA</span></a>
                <ul class="sub-menu">
                  <li><a href="ui-alerts.html">แสดงข้อมูล</a>
                  </li>
                  <li><a href="ui-buttons.html">เพิ่มข้อมูล</a>
                  </li>
                  <li><a href="ui-buttons.html">ลบข้อมูล</a>
                  </li> --}}
                </ul>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>