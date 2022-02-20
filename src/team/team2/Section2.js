import React, {useEffect} from 'react';
import AOS from 'aos';
import 'aos/dist/aos.css';
const Sec2 = () =>{
    
        useEffect(()=>{
        AOS.init({duration: 2000})
        },[])
    return(
        <>
        <section id="second_sec">
              <div data-aos="flip-up" className="container m-auto row">
                    <div className="col-12 col-md-8 col-lg-8 col-xl-8 m-auto">
                             <h3 style={{position:'relative'}}>Team Ideaology</h3>
                             <span id="wt2"></span>
                            <div className="texi_content">
                            <p className="text-center">
                            add text here add text here 
add text here add text here 
add text here add text here 
add text here add text here 

                                 </p>
                              
                            </div>
                        </div>
                  
                  </div>
            </section>
        </>
    )
}
export default Sec2;