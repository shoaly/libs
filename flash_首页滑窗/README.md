# flash 滑窗 #


一个给定宽高就可以用的flash 滑窗, 什么时候 js能够这么handy就好了...

代码示例参看bcastr4.html

下面是一些样式配置的具体参数,下面这个关键参数里面的*exactFil*没有调出来, 需要进一步研究源代码了


> 图片放缩模式: 默认值是”noBorder”	
> "showAll":	可以看到全部图片,保持比例,可能上下或者左右	
> **"exactFill":	放缩图片到舞台的尺寸,可能比例失调	**
> "noScale":	图片的原始尺寸,无放缩		
> "noBorder":	图片充满播放器,保持比例,可能会被裁剪		




设置

config.roundCorner

图片的圆角

config.autoPlayTime

图片切换时间，默认值是8，单位秒

config.isHeightQuality

图片缩小是否采用高质量的方法，默认值false

config.normal

图片的混合模式

config.transDuration

图片在切换过程中的时间，默认值1，单位秒

config.windowOpen

图片连接的打开方式，默认值”_blank”,在新窗口打开，也可以使用”_self”,使用本窗口打开

config.btnSetMargin

按钮的位置，文字的位置，用了css的margin概念，默认值”auto 5 5 auto”，四个数值代表 上 右 下 左 相对于播放器的距离，四个数值用空格分开，不需具体数值用”auto”填写 ，比如左上对齐并都有10像素的距离可以写 “10 auto auto 10″, 右下角对齐是”auto 10 10 auto”

config.btnDistance

每个按钮的距离，默认值20

config.titleBgColor

标题背景的颜色，默认0xff6600

config.titleTextColor

标题文字的颜色，默认0xffffff

config.titleBgAlpha

标题背景的透明度，默认0.75

config.titleFont

标题文字的字体，默认值”微软雅黑”

config.titleMoveDuration

标题背景动画的时间，默认值1，单位秒

config.btnAlpha

按钮的透明度，默认值0.7

config.btnTextColor

按钮文字的颜色，默认值0xffffff

config.btnDefaultColor

按钮的默认颜色，默认值0x1B3433

config.btnHoverColor

按钮的默认颜色，默认值0xff9900

config.btnFocusColor

按钮当前颜色，默认值0xff6600

config.changImageMode

切换图片的方法，默认值”click”,点击切换图片，还可以使用”hover”,鼠标悬停就切换图片

config.isShowBtn

是否显示按钮，默认值”true”

config.isShowTitle

是否显示标题，默认值”true”

config.scaleMode

图片放缩模式: 默认值是”noBorder”
"showAll":	可以看到全部图片,保持比例,可能上下或者左右
"exactFill":	放缩图片到舞台的尺寸,可能比例失调
"noScale":	图片的原始尺寸,无放缩
"noBorder":	图片充满播放器,保持比例,可能会被裁剪

config.transform

图片放缩模式: 默认值是”alpha”
“alpha”:	 透明度淡入淡出
“blur”:	 模糊淡入淡出
“left”:	 左方图片滚动
“right”:	 右方图片滚动
“top”:	 上方图片滚动
“bottom”:	 下方图片滚动
“breathe”:	 有一点点地放缩的淡入淡出
“breatheBlur”:	有一点点地放缩的模糊淡入淡出，本页的例子就是这个

config.isShowAbout

是否显示关于信息，默认值”true”