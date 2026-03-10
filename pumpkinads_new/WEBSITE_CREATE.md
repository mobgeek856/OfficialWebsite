# PUMPKIN TECHNOLOGY 官网 PRD
参考 assets/page_des/PUMPKIN TECHNOLOGY.pdf 整图示例
全部需要适配
## 1. 项目概述

### 1.1 项目名称
PUMPKIN TECHNOLOGY Corporate Website
Logo: assets/page_res/logo.png

### 1.2 项目目标
建设一个面向国际客户的企业官网，用于展示 PUMPKIN TECHNOLOGY 在广告技术领域的核心能力，并承接两类主要转化目标：

1. 面向广告主获取投放线索  
2. 面向流量主 / Publisher 获取合作线索

### 1.3 官网定位
官网定位为 **B2B 广告科技公司官网**，核心业务方向包括：

- RTB / Programmatic Advertising
- Advertiser Solutions
- HTML5 Interactive Ads / HTML5 Games
- SDK Monetization for Publishers

首页主视觉与整体内容需要体现公司在程序化广告、跨终端广告投放、互动广告、Publisher 变现等方向的专业能力。

---

## 2. 信息架构

### 2.1 一级导航
官网顶部导航固定为：

- Home
- Solutions
- Blog
- Contact

### 2.2 Solutions 二级结构
Solutions 下包含 4 个子页面：

- RTB Solution
- Advertiser Solution
- HTML5 Ads Solution
- SDK Monetization Solution

官网应统一拆成「Solutions 总页 + 4 个子页面」的形式。

### 2.3 辅助页面
Footer 需要新增以下页面入口：

- Privacy Policy
- Terms
- Cookie Policy

---

## 3. 核心业务目标

### 3.1 商业目标
1. 展示品牌可信度与技术实力  
2. 清晰解释四类 Solutions  
3. 将用户导向 Contact 页面完成表单提交  
4. 为后续内容营销预留 Blog 模块  
5. 形成一个适合 SEO、适合后续扩展的标准企业官网

### 3.2 转化目标
官网转化以 CTA 为核心，必须统一落地到以下路径：

- **Explore Solutions** → 跳转到 Solutions 总页
- **Start a Campaign** → 跳转到 Contact 页面，并默认打开 advertiser form
- **Monetize Your Traffic** → 跳转到 Contact 页面，并默认打开 publisher form

### 3.3 转化路径要求
建议使用以下 URL 方案：

- `/solutions`
- `/contact?type=advertiser`
- `/contact?type=publisher`

Contact 页面需根据 URL 参数自动切换表单类型。

---

## 4. 用户角色

### 4.1 用户角色 A：Advertiser
诉求：
- 找到优质广告流量
- 支持多广告形式与多渠道投放
- 获取数据分析与服务支持
- 快速进入投放咨询流程

### 4.2 用户角色 B：Publisher
诉求：
- 提升流量变现效率
- 提高 fill rate / eCPM
- 接入 SDK 或 RTB 变现方案
- 快速提交合作信息

---

## 5. 页面清单

本项目需包含以下页面：

1. Home
2. Solutions Index
3. Solutions / RTB Solution
4. Solutions / Advertiser Solution
5. Solutions / HTML5 Ads Solution
6. Solutions / SDK Monetization Solution
7. Blog List
8. Blog Detail
9. Contact
10. Privacy Policy
11. Terms
12. Cookie Policy

---

## 6. 全站通用需求

### 6.1 Header
要求：

- 固定顶部导航
- 左侧 Logo，右侧导航
- 当前页高亮
- 桌面端横向菜单
- 移动端汉堡菜单
- 支持二级菜单展开 Solutions 子项

### 6.2 Footer
Footer 必须补充以下内容：

#### 导航链接
- Home
- Solutions
- Blog
- Contact

#### 法务链接
- Privacy Policy
- Terms
- Cookie Policy

#### 联系方式
- Email
- Phone（可占位）
- Telegram / WhatsApp（可占位）

#### 公司地址
- Company Address
- City / State / Country
- Postal Code

#### 版权
- © 2026 PUMPKIN TECHNOLOGY. All rights reserved.

### 6.3 视觉风格
- 风格：科技感、国际化、专业、简洁
- 主色：橙色 + 白色 + 深灰 / 黑色
- 页面不花哨，但要有质感
- 可适当加入 hover、scroll reveal、按钮动效

### 6.4 响应式要求
- 适配桌面、平板、手机
- 所有 section 在移动端自然重排
- 表单、卡片、导航、图片均需自适应

### 6.5 SEO 要求
- 每页独立 title / meta description
- URL 简洁可读
- H1/H2/H3 层级清晰
- 图片支持 alt
- Blog 详情页预留 Article structured data
- Contact 页面可预留 Organization / LocalBusiness structured data
- 性能优先

---

## 7. Home 页面需求

## 7.1 页面目标
让首次访问者快速理解：
1. 公司做什么  
2. 有哪些核心解决方案  
3. 对 Advertiser 和 Publisher 分别提供什么价值  
4. 下一步应该点哪个 CTA


## 素材：
home部分底图为：page_res/1/1-1 Home-kv.png

## 7.2 模块结构

### 模块 1：Hero Banner
内容方向：

- Cutting-Edge Ad Tech Solutions   左面logo素材： page_res/1/1-1 Home-icon.png
- Powering Digital Advertising     
- Innovating the Future

辅助文案需围绕 programmatic platform、display/video、HTML5 games、PPK SDK、web/mobile/CTV seamless monetization 展开。


按钮：
- Explore Solutions
- Contact Us

需求：
- 使用高质量科技商务风背景
- 强化品牌可信度
- 首屏必须清楚表达业务范围

---

### 模块 2：Core Business
标题：
Core Business

副标题：
Three core technology platforms, building a complete programmatic advertising ecosystem.

展示 3 张业务卡片：

#### 1) Solutions-RTB
- Millisecond-level response
- Intelligent algorithm optimization
- Data analytics and reporting
- Dynamic budget allocation
- 10B+ daily bidding requests
- <50ms average response
- 98.5% delivery accuracy
  底图素材：page_res/1/1-3 Home-corebusiness-RTB.png

#### 2) HTML5 Games
- Higher engagement
- Cross-device and platform compatibility
- Faster creative deployment and iteration
- 1000+ media
- 95%+ fill rate
- 5B+ daily traffic
  底图素材：page_res/1/1-4 Home-corebusiness-html5 games.png

#### 3) SDK Solution
- Lightweight SDK design
- Support for multiple ad formats
- Clean API interfaces
- Continuous version updates
- 1000+ integrated apps
- <2MB SDK size
- <0.01% crash rate
  底图素材：page_res/1/1-5 Home-corebusiness-sdk solution.png
要求：
- 三列卡片
- 重点数字需高亮
- 可带线性图标或插图

---

### 模块 3：Multi-format / Multi-screen
素材图片：page_res/2/2-1 solutions-for publisher-anyformat.png
标题：
Maximize the value of your advertising across every format, on any screen

内容标签包括：
- Display
- Native
- Video
- Reward
- Phone
- Laptop
- Desktop
- CTV
- Web
- App
- Mini program

要求：
- 用 icon + label 表达
- 突出“跨格式 + 跨终端覆盖”

---

### 模块 4：Publisher Value Proposition
需整理成 6 个 feature blocks：
中间素材图：page_res/2/2-2 solutions-for publisher-divider.jpeg
标题描述：Your audience, data, and content are your greatest assets—and you should retain full control over how they
’re managed. If your focus is on maximizing yield and streamlining operational efficiency, you’re in the right place.

1. Maximize eCPM via real-time bidding  
2. Access massive demand sources to boost fill rates  
3. Data-driven targeting improves relevance and engagement  
4. Real-time analytics, floor pricing & brand safety controls  
5. Auto-scale with traffic; diversified demand stabilizes revenue  
6. Unified management for web, app & mini-program traffic  

---

### 模块 5：RTB Partner Steps
标题：
5 steps to become a RTB partner

CTA：
Monetize Your Traffic
素材图： page_res/2/2-3 solutions-for publisher-5steps.png
流程以 5 步形式呈现：
1. Ad Request
2. Real-Time Auction
3. Bid Evaluation
4. Ad Delivery
5. Reporting & Optimization

要求：
- 用流程图或 step cards 表现
- CTA 指向 publisher form

---

### 模块 6：Our RTB Partners
标题：
Our RTB Partners

合作伙伴素材图:  page_res/2/2-4 solutions-for publisher-logo-1.png
               page_res/2/2-4 solutions-for publisher-logo-2.png
               page_res/2/2-4 solutions-for publisher-logo-3.png
               page_res/2/2-4 solutions-for publisher-logo-4.png
               page_res/2/2-4 solutions-for publisher-logo-5.png
               page_res/2/2-4 solutions-for publisher-logo-6.png
               page_res/2/2-4 solutions-for publisher-logo-7.png
               page_res/2/2-4 solutions-for publisher-logo-8.png
               page_res/2/2-4 solutions-for publisher-logo-9.png

要求：
- Logo wall
- 支持后续替换 logo
- hover 有轻微交互


---

### 模块 7：Advertiser Intro
标题：
Maximize your reach. Optimize every channel.

左面素材图：page_res/3/3-1 solutions-for advertisers-maximizeyourreach.png

首页需要出现面向 Advertiser 的概览型内容，强调：
- premium inventory
- partnerships with large media owners
- scalable platform
- auction efficiency
- transparency across the supply chain

可在模块中放置按钮：
- Start a Campaign

---

## 8. Solutions 总页需求

## 8.1 页面目标
用于承接首页的 Explore Solutions CTA，并概览四大业务方向。

## 8.2 页面结构
建议包含：

### 模块 1：Solutions Hero
- 标题：Our Solutions
- 副标题：Built for advertisers and publishers across the programmatic ecosystem

### 模块 2：4 个 solution cards
1. RTB Solution
2. Advertiser Solution
3. HTML5 Ads Solution
4. SDK Monetization Solution

每张卡片包含：
- 标题
- 简短说明
- icon / illustration
- Learn More CTA

---

## 9. RTB Solution 页面需求

## 9.1 页面定位
面向 Publisher / Supply-side 合作伙伴的 RTB 变现方案页。

## 9.2 页面模块

### 模块 1：Intro
- 标题：RTB Solution for Publishers
- 说明：帮助发布者提升 fill rate、eCPM、收益稳定性和透明度

### 模块 2：Key Benefits
- Real-time bidding monetization
- Access to global demand
- Better yield management
- Brand safety & pricing controls
- Unified traffic management across web/app/mini program
- Real-time reporting

### 模块 3：5-step workflow
沿用 RTB partner 的 5 步流程。

### 模块 4：CTA
- Monetize Your Traffic
- 跳转 `/contact?type=publisher`

---

## 10. Advertiser Solution 页面需求

## 10.1 页面定位
面向广告主，展示全渠道投放、买量和数据分析能力。

## 10.2 页面模块
中间素材：page_res/3/3-2 solutions-for advertisers-divider.png
### 模块 1：5 大能力模块

#### 1) 标题：All formats, all channels. 
标题logo素材：page_res/3/3-3 solutions-for advertisers-icon1.png
- 文案：Through a single, unified platform, we deliver direct access to premium display, video, streaming TV, mobile, and native ad inventory from reputable media owners.

#### 2) 标题：Addressability
标题logo素材：page_res/3/3-3 solutions-for advertisers-icon2.png
- 文案：Connect with the right audiences at the right time. Our addressability solutions deliver the flexibility and control to scale audience-focused campaigns efficiently.

#### 3) 标题：Services and support
标题logo素材：page_res/3/3-3 solutions-for advertisers-icon3.png
- 文案：Our dedicated team of experts is here to drive your success. Combining strategic consulting and ongoing support, we work alongside you to scale effectively, boost performance, and deliver strong ROI.

#### 4) 标题：Transact on your terms
标题logo素材：page_res/3/3-3 solutions-for advertisers-icon4.png
- 文案：Transact on your own terms with tailored buying solutions for every campaign. From direct deals and curated marketplaces to the open exchange, we offer streamlined access to inventory and flexible purchasing capabilities.

#### 5) 标题：Data and analytics
标题logo素材：page_res/3/3-3 solutions-for advertisers-icon5.png
- 文案：Turn insights into action with comprehensive analytics and tailored reporting to optimize campaign performance. Achieve full visibility into ad spend with transparent impression-level reporting via our Client Audit Logs, delivering a verified record for every transaction.


### 模块 3：CTA
- Start a Campaign
- 跳转 `/contact?type=advertiser`

---

## 11. HTML5 Ads Solution 页面需求

## 11.1 页面定位
展示互动式 HTML5 广告 / H5 游戏广告能力，偏向 Advertiser 场景。

## 11.2 页面模块

### 模块 1：Hero
右面素材图：page_res/4/4-1 solutions-html5 games-1.png
- 标题：ADX · High-Engagement HTML5 Advertising
- 文案：A performance-focused ad exchange built for advertisers to run interactive HTML5 campaigns.
- CTA：Start a Campaign

### 模块 2：Ad Delivery Advantages
左部分素材：page_res/4/4-2 solutions-html5 games-2.png
标题：
Leverage the most advanced ad delivery technology to maximize revenue.
副标题描述：Unlock multiple formats and delivery methods to maximize your revenue with minimal changes to your existing systems.
能力点：
- 标题：Support for Rich Media Ad Formats
  标题logo：page_res/4/4-3 solutions-html5 games-icon.png
  内容：rich media ad formats such as full-screen and video ads for effective monetization.
- 标题：Header Bidding
  标题logo：page_res/4/4-3 solutions-html5 games-icon.png  
  内容：Fast and easy support for header bidding, connecting to leading global and local platforms to maximize revenue.
- 标题：Support for Special Implementations
  标题logo：page_res/4/4-3 solutions-html5 games-icon.png  
  内容：Features like lazy loading and ad slot refresh are easily implemented to get you profitable quickly.
- 标题：Smart SDK
  标题logo：page_res/4/4-3 solutions-html5 games-icon.png  
  内容：Connect to multiple mediation partners via a single SDK for easy deployment and rapid revenue maximization.

### 模块 3：Why HTML5 Games
中间部分素材：page_res/4/4-4 solutions-html5 games-divider.png
卖点包括：
- 标题：Cross-platform
  标题logo：page_res/4/4-5 solutions-html5 games-icon1.png
  内容：Based on web technology, H5 ads display smoothly on mobile, PC, tablet, APP, and mini-programs. One production enables full-network placement, greatly reducing development and adaptation costs.

- 标题：Better Interaction
  标题logo：page_res/4/4-5 solutions-html5 games-icon2.png
  内容：Supports sliding, clicking, animation, forms, games,and more. It turns passive ads into active interaction, significantly improving CTR, dwell time, and brand memory.

- 标题：Fast Update
  标题logo：page_res/4/4-5 solutions-html5 games-icon3.png
  内容：No download or re-review required. Supports real-time edits of copy, assets, and rules, quickly responding to trends and data with a very short optimization cycle.

- 标题：Data Visible
  标题logo：page_res/4/4-5 solutions-html5 games-icon4.png
  内容：Accurately tracks exposure, clicks, conversions, dwell time, shares, and more. Supports real-time monitoring and attribution, providing reliable data for programmatic optimization.

- 标题：Easy Sharing
  标题logo：page_res/4/4-5 solutions-html5 games-icon4.png
  内容：Shareable via link or QR code on social platforms. No installation needed, low spread cost, and high potential for organic viral growth.

- 标题：Programmatic Ready
  标题logo：page_res/4/4-5 solutions-html5 games-icon5.png
  内容：Fully compatible with ADX, RTB, DSP, and programmatic ecosystems. Supports precise targeting, batch placement, and smart bidding—the most standard ad format today

### 模块 4：Variety Games We Have
- 用 grid 或 carousel 展示示例游戏创意
- 适合后续替换为真实素材

配置表为：gamelist.json 可以渲染到gird中

### 模块 5：CTA
- Start a Campaign
- 跳转 `/contact?type=advertiser`

---

## 12. SDK Monetization Solution 页面需求

## 12.1 页面定位
面向 Publisher，展示轻量级变现 SDK 方案。

## 12.2 页面模块

### 模块 1：Hero
右部分素材图：page_res/5/5-1 solutions-sdk-1.png
- 标题：SDK Monetization · Built for Publishers
- 文案：A lightweight monetization SDK designed to help publishers turn traffic into sustainable revenue.
- CTA：Monetize Your Traffic

### 模块 2：Why Publishers Choose Our SDK
中间分割4部分的素材图：page_res/5/5-2 solutions-sdk-divider.png
4 个卖点：
1. 标题：Lightweight Size, Fast Integration  
   标题log: page_res/5/5-3 solutions-sdk-icon1.png
   内容: Minimal SDK size drastically reduces integration and review time for quick monetization launch.

2. 标题：Stable Compatibility, Wide Adaptation  
   标题log: page_res/5/5-3 solutions-sdk-icon2.png
   内容: Compatible with multiple OS versions and devices, reducing crashes and compatibility issues.

3. 标题：Low Resource, No Performance Worries  
   标题log: page_res/5/5-3 solutions-sdk-icon3.png
   内容: Minimal CPU, memory, and battery consumption ensures no impact on app fluidity and user experience.

4. 标题：Flexible Expansion, Efficient Monetization  
   标题log: page_res/5/5-3 solutions-sdk-icon4.png
   内容: Supports one-click access to multiple ad sources and header bidding, boosting revenue without extra development.

### 模块 3：4 Easy Steps to Monetize Your Products
用 4 步说明接入流程：
底图为：page_res/5/5-4 solutions-sdk.png
1. Integrate the SDK
2. Configure Placements
3. Handle Delivery
4. Monitor Performance

### 模块 4：CTA
- Monetize Your Traffic
- 跳转 `/contact?type=publisher`

---

## 13. Blog 页面需求

## 13.1 页面目标
用于 SEO 与内容营销。

## 13.2 Blog List 页面
预置 6 篇示例文章，主题建议：

- Programmatic Advertising Trends
- RTB Optimization
- HTML5 Interactive Ads
- CTV Monetization
- SDK Monetization Tips
- Publisher Revenue Growth

每篇文章卡片包含：
- Cover Image
- Category
- Title
- Excerpt
- Publish Date
- Read More

## 13.3 Blog Detail 页面
- 标题区
- 作者 / 时间
- 正文内容
- 相关文章推荐
- 预留 SEO 结构化数据

---

## 14. Contact 页面需求

## 14.1 页面目标
承接所有 CTA 流量，是最重要的转化页。

## 14.2 交互逻辑
页面顶部提供 Partner Type 切换：

- Publisher
- Advertiser

支持：
- Tab 切换
- URL 参数驱动默认状态
- `/contact?type=publisher`
- `/contact?type=advertiser`

## 14.3 表单字段

### 通用字段
- Contact Name *
- Work Email *
- Job Title
- Telegram / WhatsApp
- Country
- Message (optional)

### Publisher 字段
- Company Name *
- Website / App URL *
- Monthly Traffic *
- Primary GEO *
- Traffic Type（Web / App / CTV）
- Interested In（RTB / SDK / HTML5 Ads）

### Advertiser 字段
- Company Name *
- Website
- Target GEO *
- Monthly Budget *
- Ad Formats Needed（Display / Video / Native / CTV / HTML5 Interactive）

## 14.4 表单交互要求
- 必填项校验
- 错误提示明确
- 提交成功后显示 success message
- 移动端易用
- 结构简洁，商务感强

---

## 15. 技术建议

推荐使用：

- Next.js
- React
- Tailwind CSS

要求：
- 组件化开发
- 页面拆分清晰
- CTA 逻辑独立
- Contact 表单切换逻辑清晰
- 预留后端 API 接口接入能力

建议路由结构：

- `/`
- `/solutions`
- `/solutions/rtb`
- `/solutions/advertiser`
- `/solutions/html5-ads`
- `/solutions/sdk-monetization`
- `/blog`
- `/blog/[slug]`
- `/contact`
- `/privacy-policy`
- `/terms`
- `/cookie-policy`

---

## 16. 验收标准

以下内容必须全部满足：

### 16.1 导航
- 顶部导航为 Home / Solutions / Blog / Contact
- Solutions 下有 4 个子页面

### 16.2 CTA
- Explore Solutions → Solutions
- Start a Campaign → advertiser form
- Monetize Your Traffic → publisher form

### 16.3 Contact
- 必须支持 advertiser / publisher 两种表单
- 必须支持 URL 参数切换默认状态

### 16.4 Footer
- 必须补充 Privacy Policy / Terms / Cookie Policy
- 必须补充联系方式
- 必须补充公司地址

### 16.5 页面质量
- 全站响应式
- 风格统一
- 文案专业
- 支持 SEO
- 结构可扩展

---

## 17. 给 Cursor 的执行指令

请基于本 PRD 生成一个完整的英文企业官网项目，要求：

1. 使用 Next.js + React + Tailwind CSS
2. 生成完整页面与路由结构
3. 组件化开发
4. 保持专业、国际化、科技感视觉风格
5. 严格实现 CTA 跳转逻辑
6. Contact 页面实现 advertiser / publisher 两套动态表单
7. Footer 补全法务、联系方式、地址信息
8. 所有页面响应式可用
9. Blog 列表页和详情页一并生成
10. 代码结构清晰，便于后续接入真实 API 与 CMS

