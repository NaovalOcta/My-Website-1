@extends('layouts.admin')

@section('title', 'Overview')
@section('header', 'Overview Dashboard')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-card-bg p-6 rounded-2xl border border-gray-800 shadow-lg relative overflow-hidden group">
            <div class="absolute right-0 top-0 p-4 opacity-10 group-hover:opacity-20 transition transform group-hover:scale-110">
                <i class="fas fa-layer-group text-6xl text-primary"></i>
            </div>
            <p class="text-gray-400 text-sm font-medium mb-1">Total Projects</p>
            <h3 class="text-3xl font-bold text-white">12</h3>
            <p class="text-green-400 text-xs mt-2 flex items-center gap-1">
                <i class="fas fa-arrow-up"></i> +2 new this month
            </p>
        </div>

        <div class="bg-card-bg p-6 rounded-2xl border border-gray-800 shadow-lg relative overflow-hidden group">
            <div class="absolute right-0 top-0 p-4 opacity-10 group-hover:opacity-20 transition transform group-hover:scale-110">
                <i class="fas fa-eye text-6xl text-blue-500"></i>
            </div>
            <p class="text-gray-400 text-sm font-medium mb-1">Total Views</p>
            <h3 class="text-3xl font-bold text-white">24.5K</h3>
            <p class="text-green-400 text-xs mt-2 flex items-center gap-1">
                <i class="fas fa-arrow-up"></i> +12% increase
            </p>
        </div>

        <div class="bg-card-bg p-6 rounded-2xl border border-gray-800 shadow-lg relative overflow-hidden group">
            <div class="absolute right-0 top-0 p-4 opacity-10 group-hover:opacity-20 transition transform group-hover:scale-110">
                <i class="fas fa-envelope text-6xl text-purple-500"></i>
            </div>
            <p class="text-gray-400 text-sm font-medium mb-1">Messages</p>
            <h3 class="text-3xl font-bold text-white">8</h3>
            <p class="text-gray-500 text-xs mt-2">Unread messages</p>
        </div>

        <div class="bg-card-bg p-6 rounded-2xl border border-gray-800 shadow-lg relative overflow-hidden group">
            <div class="absolute right-0 top-0 p-4 opacity-10 group-hover:opacity-20 transition transform group-hover:scale-110">
                <i class="fas fa-code-branch text-6xl text-green-500"></i>
            </div>
            <p class="text-gray-400 text-sm font-medium mb-1">Git Commits</p>
            <h3 class="text-3xl font-bold text-white">1,204</h3>
            <p class="text-gray-500 text-xs mt-2">Last commit 2h ago</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        <div class="lg:col-span-2 space-y-8">

            <div class="bg-card-bg rounded-2xl border border-gray-800 p-6 shadow-lg">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-bold text-white">Visitor Statistics</h3>
                    <select class="bg-gray-800 border border-gray-700 text-gray-300 text-xs rounded-lg px-3 py-1 outline-none">
                        <option>Last 7 Days</option>
                        <option>Last Month</option>
                    </select>
                </div>
                <div class="h-64 flex items-end justify-between gap-2 px-2">
                    @foreach([40, 70, 45, 90, 60, 75, 50] as $h)
                    <div class="w-full bg-gray-800 rounded-t-sm relative group">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-primary/20 to-primary rounded-t-sm transition-all duration-500 group-hover:from-primary/40" style="height: {{ $h }}%"></div>
                    </div>
                    @endforeach
                </div>
                <div class="flex justify-between text-xs text-gray-500 mt-4 px-2">
                    <span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
                </div>
            </div>

            <div class="bg-card-bg rounded-2xl border border-gray-800 overflow-hidden shadow-lg">
                <div class="p-6 border-b border-gray-800 flex justify-between items-center">
                    <h3 class="text-lg font-bold text-white">Recent Projects</h3>
                    <a href="#" class="text-primary text-sm hover:underline">View All</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-800/50 text-gray-400 text-xs uppercase tracking-wider">
                                <th class="p-4 font-medium">Project Name</th>
                                <th class="p-4 font-medium">Status</th>
                                <th class="p-4 font-medium">Tech Stack</th>
                                <th class="p-4 font-medium text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-800 text-sm">
                            <tr class="hover:bg-gray-800/30 transition">
                                <td class="p-4 text-white font-medium">E-Commerce App</td>
                                <td class="p-4"><span class="bg-green-500/10 text-green-500 px-2 py-1 rounded text-xs border border-green-500/20">Completed</span></td>
                                <td class="p-4 text-gray-400">Laravel, Flutter</td>
                                <td class="p-4 text-right">
                                    <button class="text-gray-400 hover:text-white"><i class="fas fa-ellipsis-v"></i></button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-800/30 transition">
                                <td class="p-4 text-white font-medium">IoT Dashboard</td>
                                <td class="p-4"><span class="bg-yellow-500/10 text-yellow-500 px-2 py-1 rounded text-xs border border-yellow-500/20">In Progress</span></td>
                                <td class="p-4 text-gray-400">Vue.js, MQTT</td>
                                <td class="p-4 text-right">
                                    <button class="text-gray-400 hover:text-white"><i class="fas fa-ellipsis-v"></i></button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-800/30 transition">
                                <td class="p-4 text-white font-medium">Company Profile</td>
                                <td class="p-4"><span class="bg-blue-500/10 text-blue-500 px-2 py-1 rounded text-xs border border-blue-500/20">Review</span></td>
                                <td class="p-4 text-gray-400">Wordpress</td>
                                <td class="p-4 text-right">
                                    <button class="text-gray-400 hover:text-white"><i class="fas fa-ellipsis-v"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="space-y-8">
            <div class="bg-gradient-to-br from-primary to-orange-600 rounded-2xl p-6 shadow-lg text-white">
                <h3 class="font-bold text-lg mb-1">Server Health</h3>
                <p class="text-white/80 text-sm mb-6">System running smoothly</p>

                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-xs mb-1 font-medium">
                            <span>CPU Usage</span>
                            <span>24%</span>
                        </div>
                        <div class="w-full bg-black/20 rounded-full h-1.5">
                            <div class="bg-white h-1.5 rounded-full" style="width: 24%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-xs mb-1 font-medium">
                            <span>Memory</span>
                            <span>58%</span>
                        </div>
                        <div class="w-full bg-black/20 rounded-full h-1.5">
                            <div class="bg-white h-1.5 rounded-full" style="width: 58%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-card-bg rounded-2xl border border-gray-800 p-6 shadow-lg">
                <h3 class="text-lg font-bold text-white mb-6">Recent Activity</h3>
                <div class="space-y-6 relative before:absolute before:left-2 before:top-2 before:bottom-2 before:w-0.5 before:bg-gray-800">

                    <div class="relative pl-8">
                        <div class="absolute left-0 top-1 w-4 h-4 bg-gray-800 border-2 border-primary rounded-full z-10"></div>
                        <p class="text-sm text-gray-300">New project <span class="text-white font-semibold">"Travel App"</span> created.</p>
                        <p class="text-xs text-gray-500 mt-1">2 mins ago</p>
                    </div>

                    <div class="relative pl-8">
                        <div class="absolute left-0 top-1 w-4 h-4 bg-gray-800 border-2 border-blue-500 rounded-full z-10"></div>
                        <p class="text-sm text-gray-300">Updated <span class="text-white font-semibold">Profile Picture</span>.</p>
                        <p class="text-xs text-gray-500 mt-1">1 hour ago</p>
                    </div>

                    <div class="relative pl-8">
                        <div class="absolute left-0 top-1 w-4 h-4 bg-gray-800 border-2 border-green-500 rounded-full z-10"></div>
                        <p class="text-sm text-gray-300">Database backup completed successfully.</p>
                        <p class="text-xs text-gray-500 mt-1">5 hours ago</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
