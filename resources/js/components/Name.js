import React from "react";
import { PureComponent } from "react";

class Name extends PureComponent {
    constructor(props) {
        super(props);

        this.state = {
            name : ''
        };
    }
    handleInputChange(e) {
        this.setState( {
            name:e.target.value,
        });
    }
   render() {
       return (
           <div>
               <label>Name : </label>
               <input onChange={this.handleInputChange.bind(this)} class="form-control"/>
               <p>Hello {this.state.name}</p>
               <p>it is test.</p>
           </div>
       );
   }
}

export default Name;
