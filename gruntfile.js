module.exports = function(grunt) {
  grunt.initConfig({
    uglify: {
      vaclavpetrcom: {
        files: {
          "dist/js/bundle.min.js": "src/js/vaclavpetr_com.js"
        }
      }
    },
    sass: {
      vaclavpetrcom: {
        files: {
          "dist/css/vaclavpetr_com.css": "src/sass/vaclavpetr_com.scss"
        }
      }
    },
    cssmin: {
      vaclavpetrcom: {
        files: {
          "dist/css/vaclavpetr_com.min.css": "dist/css/vaclavpetr_com.css"
        }
      }
    },
    watch: {
      uglify: {
        files: "src/js/*.*",
        tasks: ["uglify"]
      },
      sass: {
        files: ["src/sass/*.scss"],
        tasks: ["sass"]
      },
      cssmin: {
        files: ["dist/css/vaclavpetr_com.css"],
        tasks: ["cssmin"]
      }
    }
  });

  grunt.loadNpmTasks("grunt-contrib-uglify");
  grunt.loadNpmTasks("grunt-contrib-sass");
  grunt.loadNpmTasks("grunt-contrib-cssmin");
  grunt.loadNpmTasks("grunt-contrib-watch");

  grunt.registerTask("default", ["watch"]);
};
