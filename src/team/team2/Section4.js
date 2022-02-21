
import React, {useEffect} from 'react';
import 'aos/dist/aos.css';
import AOS  from 'aos';
const Sec4 = () =>{

    useEffect(()=>{
        AOS.init({duration: 2000})
    },[])
    return(
        <>
         <section id="four">
              <div data-aos="flip-down" className="container m-auto row">
                    <div className="col-12 col-md-8 col-lg-8 col-xl-8 m-auto">
                             <h3 style={{position:'relative'}}>Team Values</h3>
                             <h4 className='text-center'><span style={{color:"#42ffff", fontSize:'40px'}}>.</span>Collaboration <span style={{color:"#42ffff",fontSize:'40px'}}>.</span>Integrity <span style={{color:"#42ffff",fontSize:'40px'}}>.</span>Humanity</h4>
                             <span id="wt2"></span>
                            <div className="texi_content">
                            </div>
                        </div>
                  
                  </div>
            </section>
        
        </>
    )
}

export default Sec4;