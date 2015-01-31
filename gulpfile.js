// 引入 gulp
var gulp = require('gulp');

// 引入组件
var less = require('gulp-less');

// less => css
gulp.task('less', function () {
    gulp.src('Public/less/**/*.less')
        .pipe(less())
        .pipe(gulp.dest('Public/css/'))
});

// 开发
gulp.task('dev', function(){
    gulp.run('less');
    gulp.watch('Public/less/**/*.less', ['less']);
});