var cholera = [384, 4, 764, 140, 148, 404, 288, 800, 50, 180, 566, 706, 834, 454, 458, 204, 332, 214, 729, 728, 356, 231, 104, 108, 368, 887, 120, 508, 894];
var hepa = [512, 4, 516, 8, 520, 12, 524, 16, 528, 531, 20, 533, 24, 28, 540, 31, 32, 362, 36, 548, 40, 554, 44, 558, 48, 50, 51, 52, 562, 566, 56, 570, 60, 574, 64, 578, 68, 580, 70, 583, 72, 584, 586, 585, 76, 591, 84, 86, 598, 600, 90, 92, 604, 96, 608, 100, 612, 104, 616, 108, 620, 112, 624, 626, 116, 630, 120, 634, 840, 124, 638, 642, 643, 132, 646, 136, 140, 652, 654, 144, 659, 660, 148, 662, 663, 152, 666, 156, 670, 158, 162, 674, 166, 678, 170, 682, 174, 175, 686, 688, 178, 690, 180, 694, 184, 188, 702, 191, 192, 703, 705, 706, 196, 704, 710, 203, 204, 716, 208, 724, 212, 214, 729, 728, 218, 732, 222, 736, 226, 740, 231, 232, 233, 234, 748, 238, 239, 752, 242, 756, 246, 760, 250, 762, 764, 254, 768, 258, 772, 262, 776, 266, 268, 780, 270, 784, 276, 788, 792, 795, 796, 798, 288, 800, 292, 804, 807, 296, 300, 304, 818, 308, 312, 826, 316, 320, 834, 324, 328, 332, 850, 340, 854, 344, 858, 348, 860, 862, 352, 356, 360, 364, 368, 882, 372, 887, 376, 380, 894, 384, 388, 392, 398, 400, 404, 408, 410, 414, 417, 418, 422, 426, 428, 430, 434, 438, 440, 442, 446, 450, 454, 458, 462, 466, 470, 474, 478, 480, 484, 492, 496, 498, 499, 500, 504, 508];
var hepb = [512, 4, 516, 8, 520, 12, 524, 16, 528, 531, 20, 533, 24, 28, 540, 31, 32, 362, 36, 548, 40, 554, 44, 558, 48, 50, 51, 52, 562, 566, 56, 570, 60, 574, 64, 578, 68, 580, 70, 583, 72, 584, 586, 585, 76, 591, 84, 86, 598, 600, 90, 92, 604, 96, 608, 100, 612, 104, 616, 108, 620, 112, 624, 626, 116, 630, 120, 634, 840, 124, 638, 642, 643, 132, 646, 136, 140, 652, 654, 144, 659, 660, 148, 662, 663, 152, 666, 156, 670, 158, 162, 674, 166, 678, 170, 682, 174, 175, 686, 688, 178, 690, 180, 694, 184, 188, 702, 191, 192, 703, 705, 706, 196, 704, 710, 203, 204, 716, 208, 724, 212, 214, 729, 728, 218, 732, 222, 736, 226, 740, 231, 232, 233, 234, 748, 238, 239, 752, 242, 756, 246, 760, 250, 762, 764, 254, 768, 258, 772, 262, 776, 266, 268, 780, 270, 784, 276, 788, 792, 795, 796, 798, 288, 800, 292, 804, 807, 296, 300, 304, 818, 308, 312, 826, 316, 320, 834, 324, 328, 332, 850, 340, 854, 344, 858, 348, 860, 862, 352, 356, 360, 364, 368, 882, 372, 887, 376, 380, 894, 384, 388, 392, 398, 400, 404, 408, 410, 414, 417, 418, 422, 426, 428, 430, 434, 438, 440, 442, 446, 450, 454, 458, 462, 466, 470, 474, 478, 480, 484, 492, 496, 498, 499, 500, 504, 508];
var malaria = [512, 4, 516, 12, 524, 24, 31, 548, 558, 50, 562, 566, 64, 68, 72, 586, 76, 591, 84, 598, 600, 90, 604, 608, 104, 108, 624, 626, 116, 120, 132, 646, 140, 148, 156, 678, 170, 682, 174, 175, 686, 178, 180, 694, 188, 704, 706, 196, 710, 204, 716, 214, 729, 728, 218, 732, 222, 736, 226, 740, 231, 232, 748, 762, 764, 254, 768, 262, 266, 270, 288, 800, 320, 834, 324, 328, 332, 340, 854, 862, 356, 360, 364, 887, 894, 384, 404, 408, 410, 418, 430, 450, 454, 458, 466, 478, 484, 508];
var polio = [4, 804, 586, 364, 760, 562, 148, 180, 566, 120, 156];
var rabies = [512, 4, 516, 8, 12, 524, 528, 531, 20, 533, 24, 28, 31, 32, 362, 36, 40, 44, 558, 48, 50, 51, 52, 562, 566, 56, 60, 64, 578, 68, 70, 72, 586, 76, 591, 84, 598, 600, 92, 604, 96, 608, 100, 104, 616, 108, 620, 112, 624, 626, 116, 630, 120, 634, 840, 124, 638, 642, 643, 132, 646, 136, 140, 652, 654, 144, 659, 660, 148, 662, 663, 152, 666, 156, 670, 158, 674, 678, 170, 682, 174, 175, 686, 688, 178, 690, 180, 694, 188, 702, 191, 192, 703, 705, 706, 196, 704, 710, 203, 204, 716, 208, 724, 212, 214, 729, 728, 218, 732, 222, 736, 226, 740, 231, 232, 233, 234, 748, 752, 756, 246, 760, 250, 762, 764, 254, 768, 262, 266, 268, 780, 270, 784, 276, 788, 792, 795, 796, 288, 800, 292, 804, 807, 300, 304, 818, 308, 312, 826, 320, 834, 324, 328, 332, 850, 340, 854, 344, 858, 348, 860, 862, 352, 356, 360, 364, 368, 372, 887, 376, 380, 894, 384, 388, 392, 398, 400, 404, 408, 410, 414, 417, 418, 422, 426, 428, 430, 434, 438, 440, 442, 446, 450, 454, 458, 466, 470, 474, 478, 480, 484, 492, 496, 498, 499, 500, 504, 508];
var typhoid = [512, 4, 516, 520, 12, 524, 16, 531, 533, 24, 28, 540, 32, 548, 44, 558, 48, 50, 562, 52, 566, 570, 60, 574, 64, 68, 580, 583, 72, 584, 586, 585, 76, 591, 84, 86, 598, 600, 90, 92, 604, 96, 608, 612, 104, 108, 624, 626, 116, 630, 120, 634, 638, 132, 646, 136, 140, 652, 654, 144, 659, 660, 148, 662, 663, 152, 156, 670, 162, 166, 678, 170, 682, 174, 175, 686, 178, 690, 180, 694, 184, 188, 702, 192, 704, 706, 710, 204, 716, 212, 214, 729, 728, 218, 732, 222, 736, 226, 740, 231, 232, 748, 238, 239, 242, 760, 762, 764, 254, 768, 258, 772, 262, 776, 266, 780, 270, 784, 788, 792, 795, 796, 798, 288, 800, 296, 818, 308, 312, 316, 320, 834, 324, 328, 332, 850, 340, 854, 344, 858, 860, 862, 356, 360, 364, 368, 882, 887, 376, 894, 384, 388, 398, 400, 404, 408, 410, 414, 417, 418, 422, 426, 430, 434, 446, 450, 454, 458, 462, 466, 474, 478, 480, 484, 496, 500, 504, 508];
var fever = [512, 4, 516, 8, 520, 12, 524, 531, 24, 28, 540, 32, 362, 36, 44, 48, 50, 562, 52, 566, 570, 574, 64, 68, 72, 586, 76, 591, 84, 600, 90, 604, 96, 608, 612, 104, 108, 624, 626, 116, 120, 638, 132, 646, 140, 652, 144, 659, 148, 662, 663, 156, 670, 162, 166, 678, 170, 682, 686, 175, 178, 690, 180, 694, 188, 702, 704, 706, 710, 204, 716, 212, 729, 728, 218, 222, 736, 226, 740, 231, 232, 748, 242, 764, 254, 768, 258, 262, 266, 780, 270, 288, 800, 296, 818, 308, 312, 320, 834, 324, 328, 332, 340, 854, 862, 356, 360, 364, 368, 882, 894, 384, 388, 398, 400, 404, 408, 417, 418, 426, 430, 434, 450, 454, 458, 462, 466, 470, 474, 478, 480, 500, 508];
var dengue = [512, 4, 516, 520, 524, 16, 531, 533, 24, 28, 540, 32, 362, 36, 548, 44, 558, 50, 562, 52, 566, 64, 68, 580, 583, 72, 584, 586, 585, 76, 591, 84, 598, 600, 90, 92, 604, 96, 608, 104, 626, 116, 630, 120, 634, 638, 132, 646, 136, 140, 652, 144, 659, 660, 148, 662, 663, 156, 670, 158, 170, 682, 174, 175, 686, 178, 690, 180, 184, 188, 702, 192, 704, 706, 204, 716, 724, 212, 214, 729, 728, 218, 222, 736, 226, 740, 231, 232, 748, 242, 764, 254, 258, 262, 266, 780, 796, 798, 288, 800, 296, 818, 308, 312, 316, 320, 834, 328, 332, 850, 340, 854, 862, 356, 360, 364, 882, 887, 894, 384, 388, 404, 414, 418, 430, 446, 450, 454, 458, 462, 466, 474, 478, 480, 484, 500, 508];
var avian = [384, 768, 642, 643, 4, 764, 262, 8, 392, 268, 524, 398, 400, 276, 792, 410, 156, 414, 31, 288, 158, 418, 804, 40, 682, 300, 688, 50, 818, 562, 566, 826, 191, 64, 703, 705, 704, 70, 710, 458, 203, 204, 586, 208, 724, 854, 344, 729, 728, 348, 736, 100, 356, 376, 104, 360, 616, 364, 368, 496, 752, 499, 116, 756, 120, 250, 380];
var tuber = [4, 516, 524, 24, 31, 50, 51, 562, 566, 64, 68, 583, 72, 584, 586, 585, 598, 90, 604, 608, 100, 104, 108, 112, 624, 626, 116, 120, 642, 643, 132, 646, 140, 148, 156, 686, 178, 180, 694, 704, 706, 710, 716, 729, 728, 736, 226, 740, 231, 232, 233, 748, 762, 764, 768, 262, 266, 268, 270, 798, 800, 804, 296, 834, 324, 328, 332, 860, 356, 360, 894, 384, 398, 404, 408, 417, 426, 428, 430, 440, 450, 454, 478, 484, 496, 498, 508];
var tick = [642, 643, 8, 392, 398, 276, 410, 156, 417, 804, 40, 300, 428, 688, 438, 440, 191, 703, 705, 578, 70, 203, 208, 348, 616, 233, 112, 496, 498, 752, 756, 246, 250, 380];
var sleep = [384, 768, 516, 646, 266, 140, 270, 148, 404, 24, 288, 800, 430, 686, 178, 562, 180, 566, 834, 324, 454, 72, 204, 716, 466, 854, 729, 728, 736, 226, 231, 108, 748, 624, 120, 508, 894];
var tick_fever = [384, 768, 132, 516, 262, 646, 266, 140, 652, 270, 894, 659, 660, 148, 404, 662, 24, 663, 28, 670, 288, 800, 426, 686, 178, 818, 52, 180, 562, 566, 312, 694, 450, 706, 324, 834, 454, 710, 72, 204, 716, 466, 850, 212, 854, 729, 728, 474, 478, 736, 226, 231, 232, 108, 748, 624, 500, 630, 120, 508, 638];
var chiku = [384, 768, 132, 516, 262, 646, 764, 266, 140, 270, 144, 894, 148, 404, 24, 156, 540, 158, 288, 800, 162, 418, 166, 678, 426, 174, 430, 175, 686, 50, 178, 180, 562, 566, 690, 694, 446, 702, 704, 450, 706, 324, 834, 454, 583, 72, 585, 458, 586, 204, 710, 462, 716, 466, 86, 854, 344, 729, 728, 478, 96, 480, 226, 608, 356, 736, 231, 104, 232, 360, 108, 748, 624, 626, 116, 887, 120, 508, 638];
var aids = [384, 768, 643, 132, 388, 262, 516, 646, 764, 266, 140, 780, 270, 148, 404, 24, 288, 800, 678, 426, 44, 430, 178, 180, 566, 694, 834, 324, 454, 710, 72, 328, 204, 332, 716, 466, 84, 854, 729, 728, 478, 480, 226, 740, 231, 233, 108, 748, 624, 120, 508, 894];
var chagas = [152, 32, 170, 558, 188, 320, 68, 328, 76, 591, 84, 340, 600, 218, 858, 604, 862, 222, 484, 740, 254];
var encepha = [643, 392, 524, 144, 408, 410, 156, 158, 418, 362, 36, 50, 64, 704, 458, 586, 598, 96, 608, 356, 104, 360, 626, 116, 764];
var meningitis = [384, 768, 140, 270, 148, 404, 288, 800, 682, 686, 566, 324, 204, 466, 854, 729, 728, 736, 231, 232, 624, 120];
var ebola = [324, 694, 430];
var all = [512, 4, 516, 8, 520, 12, 524, 16, 528, 531, 20, 533, 24, 28, 540, 31, 32, 362, 36, 548, 40, 554, 44, 558, 48, 50, 51, 52, 562, 566, 56, 570, 60, 574, 64, 578, 68, 580, 70, 583, 72, 584, 585, 586, 76, 591, 84, 86, 598, 600, 90, 92, 604, 96, 608, 100, 612, 104, 616, 108, 620, 112, 624, 626, 116, 630, 120, 634, 840, 124, 638, 642, 643, 132, 646, 136, 140, 652, 654, 144, 659, 148, 660, 662, 663, 152, 666, 156, 158, 670, 162, 674, 166, 678, 170, 682, 174, 175, 686, 688, 178, 690, 180, 694, 184, 188, 702, 191, 192, 703, 704, 705, 196, 706, 710, 203, 204, 716, 208, 212, 724, 214, 729, 728, 218, 732, 222, 736, 226, 740, 231, 232, 233, 234, 748, 238, 239, 752, 242, 756, 246, 760, 250, 762, 764, 254, 768, 258, 772, 262, 776, 266, 268, 780, 270, 784, 276, 788, 792, 795, 796, 798, 288, 800, 292, 804, 807, 296, 300, 304, 818, 308, 312, 826, 316, 320, 834, 324, 328, 332, 850, 340, 854, 344, 858, 348, 860, 862, 352, 356, 360, 364, 368, 882, 372, 887, 376, 380, 894, 384, 388, 392, 398, 400, 404, 408, 410, 414, 417, 418, 422, 426, 428, 430, 434, 438, 440, 442, 446, 450, 454, 458, 462, 466, 470, 474, 478, 480, 484, 492, 496, 498, 499, 500, 504, 508];




var diseases = {'cholera':cholera, 'hepa':hepa, 'hepb':hepb, 'malaria':malaria, 'polio':polio, 'rabies':rabies,'typhoid':typhoid, 'fever':fever, 'encepha':encepha, 'meningitis':meningitis,'dengue':dengue, 'avian':avian, 'tuber': tuber, 'tick': tick, 'sleep': sleep, 'tick_fever' : tick_fever, 'chiku': chiku, 'aids': aids,'chagas':chagas, 'ebola': ebola };
var colors = { 'ebola':"rgb(39, 48, 71)",'dengue':"rgb(39, 48, 71)", 'avian':"rgb(39, 48, 71)", 'tuber':"rgb(39, 48, 71)", 'tick':"rgb(39, 48, 71)",'sleep':"rgb(39, 48, 71)", 'tick_fever':"rgb(39, 48, 71)", 'chiku':"rgb(39, 48, 71)", 'aids':"rgb(39, 48, 71)", 'chagas':"rgb(39, 48, 71)",	'cholera':"rgb(198, 65, 65)", 'hepa':"rgb(224, 154, 74)", 'hepb':"rgb(224, 204, 74)", 'malaria':"rgb(118, 216, 75)", 'polio':"rgb(78, 118, 219)", 'rabies':"rgb(39, 48, 71)", 'typhoid':"rgb(167, 234, 91)", 'fever':"rgb(239, 239, 50)", 'encepha':"rgb(198, 126, 247)", 'meningitis':"rgb(105, 219, 239)" };
$(document).ready(function(){
    $("button").click(function(){
       var name = $(this).attr("title");
       var my_string = 'World Disease Map: ' + name;
       $("#text-dis").text(my_string);
       var diss = diseases[name];
       var color = colors[name];
       for (var i = 0; i < all.length; i++) {
            $('#' + all[i]).css("fill","rgb(240,240,240)");
        }
       for (var i = 0; i < diss.length; i++) {
            $('#' + diss[i]).css("fill",colors[name]);
        }

    });
});
