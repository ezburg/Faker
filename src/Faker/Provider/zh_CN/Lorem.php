<?php

namespace Faker\Provider\zh_CN;

class Lorem extends \Faker\Provider\Lorem
{
    protected static $sentenceList = [];
    protected static $wordList = [];

    public static function buildWordList() {
        static::$sentenceList = preg_split("/[，。？]+/u", '盛安德科技是国际领先的软件定制公司。成立14年以来，我们和500多家公司建立了合作，涵盖中国、美国、英国、澳大利亚、瑞士、挪威、德国等30多个国家，在仓储、教育、旅游、农业、餐饮、金融、保险、医疗、汽车等行业拥有丰富的经验。盛安德拥有成熟的软件研发外包解决方案，我们的专业团队将作为您的IT部门来开展长期紧密的合作，立足于您的业务和信息化目标，开发符合您业务目标和商业价值的软件。我们的愿景和目标是"成为最适合程序员工作和发展的公司"。盛安德在全球范围内提供为客户带来最大业务价值的软件定制服务。在这个过程中，工程师的行业知识得到不断积累，对客户业务的了解与把控能力迅速提升，最终能够站在客户的业务视角思考软件问题，这也是盛安德的核心优势, 在全球500+的客户中赢得了良好的口碑。成立14年来，我们始终在做这样一件事情: 将客户的业务需求和软件工程师的激情与创新能力连接起来, 拉近工程师和市场之间的距离。我们相信“Great software starts with great people”, 始终欢迎最优秀的人才加入，愿意投资于员工，在每一天的软件开发过程中给予其宽松的环境和机会去成长和改变。14年的发展过程中任何职位空缺我们优先从内部选拔，核心管理和技术力量都源自内部培养，这逐渐形成了有盛安德特色的运营和管理团队。目前他们活跃在各行各业的软件开发活动中。作为盛安德大家庭的成员，他们能力的不断成长极大地促进了盛安德的成长。2001年，张纪伟创立了盛安德。作为公司的创立者和掌门人，他负责盛安德的发展战略方向。公司14年来的成功很大一部分归功于他将个人魅力中的坦诚，诚信渗透到整个盛安德文化。他敏锐的意识到敏捷是保障离岸软件服务外包质量的最佳过程， 并且率先将其应用在公司提供的ODC服务中，继而把敏捷“灵活，轻，反应迅速”的特点扩展到整个公司内部运营及管理。创办盛安德前，张纪伟在《互联网周刊》担任编辑部主任，全面负责杂志运营。John Vanderpool在IT行业有10多年的市场及营运经验，曾在Exigen Services、netNumina (Keane)、SupplyScape等全球领先的软件咨询公司工作。他是Scrum的联盟的主要成员之一，同时也是一名认证的Scrum Product Owner。John Vanderpool负责盛安德在全球市场的业务，通过设计新的业务流程和引入先进技术，帮助团队提高效率，改善客户体验。2010年，张纪成出任盛安德欧洲子公司的总经理，负责运营工作，包括明确市场定位、简化业务流程、把握技术方向、确保先进技术的应用等，逐渐为盛安德开辟了新的发展空间。在此之前8年的时间，张纪成一直担任公司CTO。加入盛安德之前，张纪成曾担任硅谷动力技术总监，他带领团队研发了90年代后期中国最先进的内容管理系统。段生江，资深项目经理和IT咨询顾问，有超过13年的IT行业经验，在软件设计，项目管理，业务需求分析，产品设计及企业信息化等方面积累了丰富的专业知识和实践经验。曾经带领团队帮助国内外许多客户成功研发了适合客户的软件系统，技术领域涉及移动开发、互联网Web应用、物联网系统、及传统桌面应用。成功领导了周期超过8年，金额超过千万的大型产品研发项目，使客户的产品赢得了市场的广泛认可，并与客户建立了长期稳定的合作伙伴关系。为多个客户做过IT咨询服务，并拥有超过4年的IT总监经历。2015年开始带领团队为国内某传统行业客户开发物联网及大数据分析产品，第一代产品已经取得市场的普遍认可，目前正在进行第二代产品的研发。作为企业的管理者，您是否遇到以下问题？如何利用信息化的手段使自己的企业在同行业中树立竞争优势？互联网+的大背景下，软件在传统企业的转型中成为重要一环；如何能够开发出支撑新业务发展的软件系统成为企业面前的一道难题。无论是企业信息化或支撑企业转型的软件产品的开发，都和您的企业发展战略密不可分，需要据其进行长期规划、调整和逐步实现，在这个过程中，CIO是不可或缺的一个角色。特殊的企业环境在盛安德造就了一批具有运营思维的IT精英，他们如同您的CIO，能够站在企业运营的角度深入分析您的业务，明晰信息化或者软件在转型中的位置和目标，又深谙如何利用云计算，大数据，物联网，数据分析等IT手段来具体实现。电商和互联网的飞速发展对仓储物流企业提出了新的要求。消费模式的转变从销售终端促使运输、仓储、生产整个供应链体系做出调整；对于相关企业而言，最为关键的是如何适应新的仓储管理与配货模式，信息化是其中不可或缺的一环。盛安德对物流企业信息化"落地"有丰富的经验，尤其当您的企业拥有独特业务流程，主流物流软件无法满足的情况下，盛安德将根据您的需求，为您量身定制，打造您的专属仓储物流解决方案，从而帮助企业实现改革创新。我们曾为仓储企业提供的定制服务包括租赁协议、租赁下单、保险、账户管理、状态查询、付款方式等，物流行业则主要涵盖内部管理系统与外部交易系统，我们的经验主要涉及内部管理系统的信息管理、任务分工、物流追踪、文件传递等，外部系统则倾向于客户服务、账户管理、追踪售后等。此外，为了适应多样化的仓储/物流相关企业需求，我们还可对二者进行融合，以满足较大的仓储物流合一企业的需求，并对周边行业相关功能和需求进行集成，比如员工考核、企业发展分析报告、企业内部审批等，为客户实现功能的拓展和延伸。相关项目经验。自助仓储管理系统客户是一家纳斯达克上市企业，主营自助仓储业务，其目前拥有1632自助存储点，覆盖全美36个州；是美国第四大自助仓储运营商。由于业务流程复杂，变化较快，需要不断有新的软件系统/功能模块来满足使用需求。盛安德已帮助客户开发了网上业务系统，配需系统，电子票据处理，桌面支持网站和应用程序等。货运代理管理系统。客户是一家挪威的物流公司，提供其国内和国际货运代理服务，包括仓储租赁、危险品运输和清关等服务。市场环境的复杂化及办公效率的制约，使得他们寻求与盛安德进行合作，实现仓库规划、运输管理和产品交付等活动都在一个统一的平台上完成，以实现高效科学的办公。物流扫描和报表管理系统。客户是一家位于新西兰的海运物流公司，专注于生鲜肉类的运输。两年多来，盛安德帮助其开发手持设备扫描系统以及报表管理系统，实现生鲜肉厂家，货物搬运公司以及物流公司的无缝合作，在产品运输过程中实现对货物的跟踪，盘点以及交付等管理。船舶管理系统。近两年来，盛安德和客户合作开发和维护一个船舶管理系统。通过此系统，用户可以协调中间人提供的船舶进行精准协调，从而满足订单需求。 具体包括：管理船舶信息，建立货运需求，生成表单，并且支持邮件收发并对邮件指定内容分析自动归类。物流订单管理系统。我们为一个美国客户开发了物流订单管理系统 -- 用户包括货主，中间商以及物流公司，三方可以协调合作实现服务预定，订单管理，货船跟踪以及报告定制，邮箱提醒等功能。');

        static::$wordList = preg_split("/[、 ，]+/u", '梦琪、忆柳、之桃、慕青、问兰、尔岚、元香、初夏、沛菡、傲珊、曼文、乐菱、痴珊、恨玉、惜文、香寒、新柔、语蓉、海安、夜蓉、涵柏、水桃、醉蓝、春儿、语琴、从彤、傲晴、语兰、又菱、碧彤、元霜、怜梦、紫寒、妙彤、曼易、南莲、紫翠、雨寒、易烟、如萱、梦琪、忆柳、之桃、慕青、问兰、尔岚、元香、初夏、沛菡、傲珊、曼文、乐菱、痴珊、恨玉、惜文、香寒、新柔、语蓉、海安、夜蓉、涵柏、水桃、醉蓝、春儿、语琴、从彤、傲晴、语兰、又菱、碧彤、元霜、怜梦、紫寒、妙彤、曼易、南莲、紫翠、雨寒、易烟、如萱、若南、寻真、晓亦、向珊、慕灵、以蕊、寻雁、映易、雪柳、孤岚、笑霜、海云、凝天、沛珊、寒云、冰旋、宛儿、绿真、盼儿、晓霜、碧凡、夏菡、曼香、若烟、半梦、雅绿、冰蓝、灵槐、平安、书翠、翠风、香巧、代云、梦曼、幼翠、友巧、听寒、梦柏、醉易、访旋、亦玉、凌萱、访卉、怀亦、笑蓝、春翠、靖柏、夜蕾、冰夏、梦松、书雪、乐枫、念薇、靖雁、寻春、恨山、从寒、忆香、觅波、静曼、凡旋、以亦、念露、芷蕾、千兰、新波、代真、新蕾、雁玉、冷卉、紫山、千琴、恨天、傲芙、盼山、怀蝶、冰兰、山柏、翠萱、恨松、问旋、从南、白易、问筠、如霜、半芹、丹珍、冰彤、亦寒、寒雁、怜云、寻文、乐丹、翠柔、谷山、之瑶、冰露、尔珍、谷雪、乐萱、涵菡、海莲、傲蕾、青槐、冬儿、易梦、惜雪、宛海、之柔、夏青、亦瑶、妙菡、春竹、痴梦、紫蓝、晓巧、幻柏、元风、冰枫、访蕊、南春、芷蕊、凡蕾、凡柔、安蕾、天荷、含玉、书兰、雅琴、书瑶、春雁、从安、夏槐、念芹、怀萍、代曼、幻珊、谷丝、秋翠、白晴、海露、代荷、含玉、书蕾、听白、访琴、灵雁、秋春、雪青、乐瑶、含烟、涵双、平蝶、雅蕊、傲之、灵薇、绿春、含蕾、从梦、从蓉、初丹。听兰、听蓉、语芙、夏彤、凌瑶、忆翠、幻灵、怜菡、紫南、依珊、妙竹、访烟、怜蕾、映寒、友绿、冰萍、惜霜、凌香、芷蕾、雁卉、迎梦、元柏、代萱、紫真、千青、凌寒、紫安、寒安、怀蕊、秋荷、涵雁、以山、凡梅、盼曼、翠彤、谷冬、新巧、冷安、千萍、冰烟、雅阳、友绿、南松、诗云、飞风、寄灵、书芹、幼蓉、以蓝、笑寒、忆寒、秋烟、芷巧、水香、映之、醉波、幻莲、夜山、芷卉、向彤、小玉、幼南、凡梦、尔曼、念波、迎松、青寒、笑天、涵蕾、荡漾，绯红，隔膜，哽咽，古朴，鼓励，酣睡，豪迈，和熙，浩荡，和蔼，黄晕，皎洁，惊愕，鞠躬，凯旋，坎坷，恳切，魁梧，脸颊，嘹亮，蔓延，萌芽，蹒跚，谦逊，宛如，婉约，惘然，污秽，蔚蓝，闲暇，细腻，屹立，斟酌，信仰，背离，执念 ，失意，痛悲，依恋，承诺，缠绵，苦楚，徘徊，错爱，淡忘，琼浆，触电，相遇，迷朦，坠人，渴盼，迷乱 神采奕奕 眉飞色舞 昂首挺胸 炯炯有神 精神焕发 龙马精神 兴高采烈 气宇轩昂 生龙活虎 喜笑颜开心旷神怡 心花怒放 欢天喜地 乐不可支 满面春风 落落大方 惊慌失措 漫不经心 垂头丧气 没精打采 愁眉苦脸 大惊失色 如坐针毡 有气无力 嬉皮笑脸 油腔滑调 悠然自得 局促不安 面红耳赤 呆若木鸡 学无止境 学而不厌 真才实学 好学不倦 勤学好问 发奋图强 废寝忘食 争分夺秒 孜孜不倦 笨鸟先飞 闻鸡起舞 自强不息 只争朝夕 不甘示弱 全力以赴 力争上游 专心一志 全神贯注 聚精会神 目不转睛 坚持不懈 积少成多 如饥似渴 业精于勤 只要功夫深,铁杵磨成绣花针不学无术 不耻下问 取长补短 日积月累 勤学苦练 不求甚解 一知半解 囫囵吞枣 三天打鱼,两天晒网 各人自扫门前雪 鸿飞雪爪 洪炉点雪 鸿泥雪爪 含霜履雪 鸿爪雪泥 积雪封霜 积雪囊萤 集萤映雪 镂冰劚雪 露钞雪纂 流风回雪 凛如霜雪 露纂雪钞 眠霜卧雪 啮雪餐毡 啮雪吞毡 囊萤映雪 骑驴风雪中 欺霜傲雪 如汤灌雪 如汤浇雪 如汤泼雪 如汤沃雪 瑞雪兆丰年 孙康映雪 山阴夜雪 饕风虐雪 挑雪填井 卧雪眠霜 雪案萤窗 雪案萤灯 雪鬓霜鬟 雪鬓霜毛 雪北香南 雪耻报仇 雪操冰心 雪窗萤火 雪窗萤几 雪鸿指爪 雪窖冰天 雪窑冰天 雪里送炭 雪虐风饕 雪泥鸿迹 雪泥鸿爪 雪上加霜 雪胎梅骨 雪天萤席 雪碗冰瓯 洗雪逋负 雪月风花 雪兆丰年 雪中鸿爪 雪中送炭 阳春白雪 萤窗雪案 萤灯雪屋 迎风冒雪 尤花殢雪 粤犬吠雪 云起雪飞 以汤沃雪 映雪读书 映雪囊萤 压雪求油 尤云殢雪 郢中白雪 照萤映雪');
    }

    /**
     * Generate a random sentence
     *
     * @example 'Lorem ipsum dolor sit amet.'
     * @param integer $nbWords         around how many words the sentence should contain
     * @param boolean $variableNbWords set to false if you want exactly $nbWords returned,
     *                                  otherwise $nbWords may vary by +/-40% with a minimum of 1
     * @return string
     */
    public static function sentence($nbWords = 6, $variableNbWords = true)
    {
        $sentence = static::randomElement(static::$sentenceList);
        if (static::randomDigitNotNull() % 2) {
            return $sentence . '。';
        }
        return $sentence . '，' . static::randomElement(static::$sentenceList) . '。';
    }
}

Lorem::buildWordList();