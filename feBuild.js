var less2css = require('less2css');

/**
 * 配置文件
 * @type {{encode: string, workspace: string, ignore: string, input: string, lessInput: string}}
 */
var defConf = {
    "workspace": "./Public/",
	"lessInput": 'less/'
}
// 编译less
less2css.less2css(defConf);

