(()=>{"use strict";var e={d:(t,o)=>{for(var a in o)e.o(o,a)&&!e.o(t,a)&&Object.defineProperty(t,a,{enumerable:!0,get:o[a]})},o:(e,t)=>Object.prototype.hasOwnProperty.call(e,t),r:e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})}},t={};e.r(t),e.d(t,{blockMetadataAttribute:()=>n});const o=window.wp.hooks,a=window.wp.blocks,r=window.lodash;function n(e){if((0,a.hasBlockSupport)(e,"kbMetadata")){e.attributes=(0,r.assign)(e.attributes,{metadata:{type:"object",default:{name:""}}});const t=(0,a.getBlockSupport)(e,"kbContentLabel");e.__experimentalLabel=(o,{context:a})=>{const{metadata:n}=o;return"list-view"===a&&""!==(0,r.get)(n,"name","")?n.name:"list-view"===a&&void 0!==t&&""!==(0,r.get)(o,t)?"kadence/pane"===(0,r.get)(e,"name")&&(0,r.get)(o,t)instanceof Array?i((0,r.get)(o,t)):(0,r.get)(o,t):void 0}}return e}function i(e){let t="";return e.forEach((e=>{"string"==typeof e?t+=e:e.props&&e.props.children&&(t+=i(e.props.children))})),t}(0,o.addFilter)("blocks.registerBlockType","kadence/block-label",n),(this.kadence=this.kadence||{})["early-filters"]=t})();