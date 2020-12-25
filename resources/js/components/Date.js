import React from "react";
import { PureComponent } from "react";

class Date extends PureComponent {

  render() {
      return (
          <div>
           <h1>Hey : check this like pro</h1>
              <button onClick={
                  function handleClick(e) {
                      e.preventDefault();
                     $(function (){
                         $.ajax({
                             url: 'test',
                             method : 'GET',
                             value : { data : 'test'},
                             success : function (msg){
                                alert(msg);
                             }
                         })
                     })
                  }}>
                  Activate Lasers
              </button>
          </div>

      );
  };
}


export default Date;
