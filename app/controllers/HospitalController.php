<?php

class HospitalController extends BaseController{
    
    public function introduction(){

        $hospital_id = Input::get( 'hospital_id', 1 );
        $hospital_info = Hospital::find( $hospital_id );

        if ( $hospital_info ){
            $data = array(
                'photo' => $hospital_info->photo,
                'name' => $hospital_info->name,
                'description' => html_entity_decode( $hospital_info->description )
            );
        }

        $return_type = Input::get( 'return_type', '' );

        if ( $return_type == 'json' ){

            if ( isset( $data ) ){
                $data['error_code'] = 0;

                return Response::json( $data );
            }else{
                // 不存在该医院信息
                return Response::json([ 
                    'error_code' => 1, 
                    'message' => '不存在该医院信息'
                ]);
            }
        }else{
            if ( !isset( $data ) ){
                die( 'Error!' );
            }else{
                return View::make( 'hospital.introduction', $data );
            }
        }
    }
}