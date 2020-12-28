import React , { useState } from 'react';
import ReactDOM from 'react-dom';
import Date from "./Date";

function Example() {
    const [isRed, setRed ] = useState(false);
    let [count , setCount ] = useState(0);

    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div class="container">
                            <Date name="Deepak"/>
                            <Date name="Ram"/>
                            <Date name="Hari"/>
                            <Date name="Shyam"/>
                        </div>
                     <div className="card-body">
                         <button onClick={count++}>Increment</button>
                         <h1>{count}</h1>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById('root')) {

    ReactDOM.render(<Example />, document.getElementById('root'));

}
