{"filter":false,"title":"Category.php","tooltip":"/work_command/blog/app/Category.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"remove","lines":["/"],"id":2},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":8,"column":4},"end":{"row":11,"column":1},"action":"insert","lines":["public function posts()   ","{","    return $this->hasMany('App\\Post');  ","}"],"id":3}],[{"start":{"row":11,"column":1},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":4}],[{"start":{"row":12,"column":0},"end":{"row":15,"column":1},"action":"insert","lines":["public function getByCategory(int $limit_count = 5)","{","     return $this->posts()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);","}"],"id":5}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":15,"column":1},"end":{"row":15,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1647682738724,"hash":"e1f51d5512adf9e37d8121fc552bd9a2dc7f44e9"}