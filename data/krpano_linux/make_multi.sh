basepath=$(cd `dirname $0`; pwd)
$basepath"/"krpanotools makepano -config=templates/vtour-multires.config $*
