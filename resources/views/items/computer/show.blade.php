<link rel="stylesheet" href="{{ asset('css/computerss.css') }}" />
<x-app-layout>

      <div class="header-102">
        <div class="container">
          <div class="column2">
            <div class="content3">
              <b class="heading1">Basic Info</b>
              <div class="text1">
                <strong>Manufacturer: </strong> {{$computer->manufacturers->name}} <br>
                <strong>Model: </strong> {{$computer->model}} <br>
                <strong>Submodel: </strong> {{$computer->submodel}} <br>
                <strong>Year: </strong> {{$computer->year}} <br>
                <strong>Serial Number: </strong> {{$computer->serial_number}} <br>
              </div>
              <b class="heading1">Additional Info</b>
              <div class="text1">
                <strong>Power Type: </strong> {{$computer->power_type}} <br>
                <strong>Power Rating: </strong> {{$computer->power_rating}} <br>
                <strong>Speed: </strong> {{$computer->speed}} <br>
                <strong>Bits: </strong> {{$computer->bit}} <br>
                <strong>Description: </strong> {{$computer->description}} <br>
                <strong>Issues: </strong> 
              </div>
              <b class="heading1">Position Info</b>
              <div class="text1">
                <strong>Inventory Number: </strong> {{$computer->inventory_number}} <br>
                <strong>Position: </strong> {{$computer->bool_position ? 'Container' : 'Shelf'}} <br>
                <strong>Position Code: </strong> {{$computer->position_id}} <br>
              </div>
              <b class="heading1">Belongs To</b>
              <div class="text1">
                <strong>Keyboard: </strong> {{$computer->keyboard}} <br>
                <strong>Monitor: </strong> {{$computer->monitor}} <br>
                <strong>Other Pheripherals: </strong> {{$computer->year}} <br>
              </div>
            </div>
          </div>
          <div class="column7">
            <img
              class="placeholder-image"
              alt=""
              src="{{ asset($computer->icon) }}"
            />

            <div class="row2">
              <div class="content4">
                <div class="text2">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
              </div>
              <div class="content5">
                <div class="slider-dots">
                  <div class="dot"></div>
                  <div class="dot1"></div>
                  <div class="dot1"></div>
                </div>
                <div class="slider-buttons">
                  <div class="button8">
                    <img class="icon1" alt="" src="./public/icon.svg" />
                  </div>
                  <div class="button8">
                    <img class="icon1" alt="" src="./public/icon1.svg" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>
