import React from 'react';
import ReactDOM from 'react-dom';
import Name from "./Name";
 import Date from "./Date";
function Example() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <Name />
                        <div class="container">
                            <Date />
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
