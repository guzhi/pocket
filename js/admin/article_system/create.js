/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

seajs.use('/style/js/sea.config');
define(function(require,exports,module) {
    require.async(['other/validform/validform.min',
        'other/bootstrap/bootstrap.min'
    ],function(validform){
        
        validform.valid();
    });
    
});





